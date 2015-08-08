<?php namespace Themes\Unify\Http\Admin;

use App\System\Http\Controller;

class ThemeController extends Controller
{

    public function unify()
    {
        return view('Unify::admin.overview', [
            'theme' => $this->theme->current()
        ]);
    }

}