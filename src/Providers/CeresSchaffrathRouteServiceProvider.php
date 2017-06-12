<?php


    namespace CeresSchaffrath\Providers;


    use Plenty\Plugin\RouteServiceProvider;
    use Plenty\Plugin\Routing\Router;

    class CeresSchaffrathRouteServiceProvider extends RouteServiceProvider {

        public function map(Router $router)
        {
            $router -> get('versandkosten', 'StaticPagesRoutes\Controllers\StaticPagesRoutesController@showVersandkosten');
            $router -> get('zahlungsarten', 'StaticPagesRoutes\Controllers\StaticPagesRoutesController@showZahlungsarten');
            $router -> get('kontakt', 'StaticPagesRoutes\Controllers\StaticPagesRoutesController@showKontakt');
            $router -> get('hilfe', 'StaticPagesRoutes\Controllers\StaticPagesRoutesController@showHilfe');

        }
    }