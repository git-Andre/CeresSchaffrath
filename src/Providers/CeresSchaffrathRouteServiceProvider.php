<?php

    namespace CeresSchaffrath\Providers;

    use Plenty\Plugin\RouteServiceProvider;
    use Plenty\Plugin\Routing\Router;

    /**
     * Class StaticPagesRoutesRouteServiceProvider
     * @package StaticPagesRoutes\Providers
     */
    class CeresSchaffrathRouteServiceProvider extends RouteServiceProvider {

        /**
         * @param Router $router
         */
        public function map(Router $router)
        {
            $router -> get('versandkosten', 'CeresSchaffrath\Controllers\StaticPagesRoutesController@showVersandkosten');
            $router -> get('zahlungsarten', 'CeresSchaffrath\Controllers\StaticPagesRoutesController@showZahlungsarten');
            $router -> get('kontakt', 'CeresSchaffrath\Controllers\StaticPagesRoutesController@showKontakt');
            $router -> get('hilfe', 'CeresSchaffrath\Controllers\StaticPagesRoutesController@showHilfe');

            $router -> get('impressum', 'CeresSchaffrath\Controllers\StaticPagesRoutesController@showImpressum');
            $router -> get('legal-disclosure', 'CeresSchaffrath\Controllers\StaticPagesRoutesController@showImpressum');

            $router -> get('widerruf', 'CeresSchaffrath\Controllers\StaticPagesRoutesController@showWiderruf');
            $router -> get('cancellation-rights', 'CeresSchaffrath\Controllers\StaticPagesRoutesController@showWiderruf');

            $router -> get('agb', 'CeresSchaffrath\Controllers\StaticPagesRoutesController@showAgb');
            $router -> get('terms-conditions', 'CeresSchaffrath\Controllers\StaticPagesRoutesController@showAgb');

            $router -> get('datenschutz', 'CeresSchaffrath\Controllers\StaticPagesRoutesController@showDatenschutz');
            $router -> get('privacy-policy', 'CeresSchaffrath\Controllers\StaticPagesRoutesController@showDatenschutz');
        }
    }