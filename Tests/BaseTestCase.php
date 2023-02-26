<?php

namespace Mudassar\Menus\Tests;

use Collective\Html\HtmlServiceProvider;
use Mudassar\Menus\MenusServiceProvider;
use Orchestra\Testbench\TestCase as OrchestraTestCase;

abstract class BaseTestCase extends OrchestraTestCase
{
    public function setUp() : void
    {
        parent::setUp();

        // $this->setUpDatabase();
    }

    protected function getPackageProviders($app)
    {
        return [
            HtmlServiceProvider::class,
            MenusServiceProvider::class,
        ];
    }

    /**
     * Set up the environment.
     *
     * @param \Illuminate\Foundation\Application $app
     */
    protected function getEnvironmentSetUp($app)
    {
        $app['config']->set('menus', [
            'styles' => [
                'navbar' => \Mudassar\Menus\Presenters\Bootstrap\NavbarPresenter::class,
                'navbar-right' => \Mudassar\Menus\Presenters\Bootstrap\NavbarRightPresenter::class,
                'nav-pills' => \Mudassar\Menus\Presenters\Bootstrap\NavPillsPresenter::class,
                'nav-tab' => \Mudassar\Menus\Presenters\Bootstrap\NavTabPresenter::class,
                'sidebar' => \Mudassar\Menus\Presenters\Bootstrap\SidebarMenuPresenter::class,
                'navmenu' => \Mudassar\Menus\Presenters\Bootstrap\NavMenuPresenter::class,
            ],

            'ordering' => false,
        ]);
    }
}
