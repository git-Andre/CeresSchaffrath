<?php
    /**
     * Created by PhpStorm.
     * User: Andre Oelschlaegel
     * Date: 17.05.2017
     * Time: 19:21
     */


    namespace CeresElectronic\Providers;


    use Plenty\Plugin\RouteServiceProvider;
    use Plenty\Plugin\Routing\Router;

    class CeresElectronicRouteServiceProvider extends RouteServiceProvider {

        public function map(Router $router)
        {
            // $router->get('topitems', 'CeresElectronic\Controllers\TopItemsController@showTopItems');


            $router -> get('agb', 'CeresElectronic\Controllers\StaticPagesController@call');
        }
    }