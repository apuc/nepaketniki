<?php

namespace workspace\modules\themes;


use core\App;

class Themes
{
    public static function run()
    {
        $config['adminLeftMenu'] = [
            [
                'title' => 'Темы',
                'url' => '/admin/themes',
                'icon' => '<i class="nav-icon fa fa-paint-brush"></i>',
            ],
        ];

        App::mergeConfig($config);
    }
}