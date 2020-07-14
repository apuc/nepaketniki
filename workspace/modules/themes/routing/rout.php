<?php

use core\App;

App::$collector->group(['before' => 'auth'], function ($router){
    App::$collector->group(['prefix' => 'admin'], function ($router){
        App::$collector->gridView('themes', ['workspace\modules\themes\controllers\ThemesController']);
        App::$collector->any('theme-set-active', ['workspace\modules\themes\controllers\ThemesController', 'actionSetActiveTheme']);
    });
});

//App::$collector->gridView('themes', ['workspace\modules\themes\controllers\ThemesController']);
//App::$collector->any('theme-set-active', ['workspace\modules\themes\controllers\ThemesController', 'actionSetActiveTheme']);