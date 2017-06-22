<?php

    namespace StaticPagesRoutes\Providers;

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
            ∆
            $router -> get('versandkosten', 'CeresSchaffrath\StaticPagesRoutesController@showVersandkosten');
            $router -> get('zahlungsarten', 'CeresSchaffrath\StaticPagesRoutesController@showZahlungsarten');
            $router -> get('kontakt', 'CeresSchaffrath\StaticPagesRoutesController@showKontakt');
            $router -> get('hilfe', 'CeresSchaffrath\StaticPagesRoutesController@showHilfe');

            $router -> get('impressum', 'CeresSchaffrath\StaticPagesRoutesController@showImpressum');
            $router -> get('legal-disclosure', 'CeresSchaffrath\StaticPagesRoutesController@showImpressum');

            $router -> get('widerruf', 'CeresSchaffrath\StaticPagesRoutesController@showWiderruf');
            $router -> get('cancellation-rights', 'CeresSchaffrath\StaticPagesRoutesController@showWiderruf');

            $router -> get('agb', 'CeresSchaffrath\StaticPagesRoutesController@showAgb');
            $router -> get('terms-conditions', 'CeresSchaffrath\StaticPagesRoutesController@showAgb');

            $router -> get('datenschutz', 'CeresSchaffrath\StaticPagesRoutesController@showDatenschutz');
            $router -> get('privacy-policy', 'CeresSchaffrath\StaticPagesRoutesController@showDatenschutz');
        }
    }