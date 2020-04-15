<?php

namespace workspace\modules\settings;


use core\App;

class Settings
{
    public static function run()
    {
        $config['adminLeftMenu'] = [
            [
                'title' => 'Settings',
                'url' => '/settings',
                'icon' => '<i class="nav-icon fas fa-copy"></i>',
            ],
        ];

        App::mergeConfig($config);
    }
}