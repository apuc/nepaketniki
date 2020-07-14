<?php

namespace workspace\modules\categories;


use core\App;

class Categories
{
    public static function run()
    {
        $config['adminLeftMenu'] = [
            [
                'title' => 'Категории',
                'url' => '/admin/categories',
                'icon' => '<i class="nav-icon fa fa-tags"></i>',
            ],
        ];

        App::mergeConfig($config);
    }
}