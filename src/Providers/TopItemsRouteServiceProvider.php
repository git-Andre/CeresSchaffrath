<?php
/**
 * Created by PhpStorm.
 * User: Andre Oelschlaegel
 * Date: 17.05.2017
 * Time: 19:21
 */


namespace TopItems\Providers;


use Plenty\Plugin\RouteServiceProvider;
use Plenty\Plugin\Routing\Router;

class TopItemsRouteServiceProvider extends RouteServiceProvider {

    public function map(Router $router)
    {
        $router->get('topitems', 'CeresElectronic\Controllers\TopItemsController@showTopItems');
    }
}