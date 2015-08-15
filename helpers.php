<?php

if (!function_exists('unify_colors')) {

    function unify_colors($type = 'color', $noinherit = false, $nolight = false)
    {

        switch($type){
            case 'bg':
                $prefix = 'bg-color-';
                break;
            case 'color':
            default:
                $prefix = 'color-';
                break;
        }

        $colors = [
            $prefix . 'sea',
            $prefix . 'red',
            $prefix . 'aqua',
            $prefix . 'blue',
            $prefix . 'grey',
            $prefix . 'dark',
            $prefix . 'green',
            $prefix . 'brown',
            $prefix . 'light',
            $prefix . 'orange',
            $prefix . 'yellow',
            $prefix . 'green1',
            $prefix . 'purple',
            $prefix . 'inherit',
            $prefix . 'dark-blue',
            $prefix . 'light-grey',
            $prefix . 'light-green',
        ];

        if($noinherit)
        {
            $colors = array_filter($colors, function($item) use ($prefix){
                return $item != $prefix . 'inherit';
            });
        }

        if($nolight)
        {
            $colors = array_filter($colors, function($item) use ($prefix){
                return $item != $prefix . 'light';
            });
        }

        return $colors;
    }
}

if (!function_exists('unify_color')) {

    function unify_color($prefix = 'color', $noinherit = false, $nolight = false)
    {
        return array_rand(array_flip(unify_colors($prefix, $noinherit, $nolight)));
    }
}