<?php


    namespace CeresSchaffrath\Providers;


    use Plenty\Plugin\RouteServiceProvider;
    use Plenty\Plugin\Routing\Router;

    class CeresSchaffrathRouteServiceProvider extends RouteServiceProvider {

        public function register()
        {
        }

        public function map(Router $router)
        {
            $router -> get('versandkosten', 'CeresSchaffrath::Controllers.StaticPagesController@showVersandkosten');
            $router -> get('test', 'IO\Controllers\StaticPagesController@showTermsAndConditions');
            $router -> get('test2', 'CeresSchaffrath::Controllers.StaticPagesController@showTest');

        }
    }