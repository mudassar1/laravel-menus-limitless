<?php

return [

    'styles' => [
        'navbar' => \Mudassar\Menus\Presenters\Bootstrap\NavbarPresenter::class,
        'navbar-right' => \Mudassar\Menus\Presenters\Bootstrap\NavbarRightPresenter::class,
        'nav-pills' => \Mudassar\Menus\Presenters\Bootstrap\NavPillsPresenter::class,
        'nav-tab' => \Mudassar\Menus\Presenters\Bootstrap\NavTabPresenter::class,
        'sidebar' => \Mudassar\Menus\Presenters\Bootstrap\SidebarMenuPresenter::class,
        'navmenu' => \Mudassar\Menus\Presenters\Bootstrap\NavMenuPresenter::class,
        'adminlte' => \Mudassar\Menus\Presenters\Admin\LimitlessPresenter::class,
        'zurbmenu' => \Mudassar\Menus\Presenters\Foundation\ZurbMenuPresenter::class,
    ],

    'ordering' => false,

];
