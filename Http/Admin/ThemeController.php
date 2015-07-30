<?php namespace Themes\Unify\Http\Admin;

use App\Http\Controllers\Controller;

class ThemeController extends Controller
{

    public function unify()
    {
        return view('unify::admin.overview', [
            'theme' => $this->theme->current()
        ]);
    }

}