<?php

namespace Acme;

use Acme\Controller\FirstTimeSetup;
use Concrete\Core\Routing\RouteListInterface;
use Concrete\Core\Routing\Router;

defined('C5_EXECUTE') or die('Access Denied.');

class RouteList implements RouteListInterface
{
    public function loadRoutes(Router $router)
    {
        $router->post('/_acme_ccm/first_time_setup/server', [FirstTimeSetup::class, 'createFirstServer']);
        $router->post('/_acme_ccm/first_time_setup/account', [FirstTimeSetup::class, 'createFirstAccount']);
    }
}
