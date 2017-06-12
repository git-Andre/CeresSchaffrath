<?php
    /**
     * Created by PhpStorm.
     * User: andreoelschlaegel
     * Date: 26.05.17
     * Time: 23:17
     */

    namespace CeresSchaffrath\Controllers;

    use Plenty\Plugin\Controller;
    use Plenty\Plugin\Templates\Twig;


    class StaticPagesController extends Controller {


        /**
         * @param Twig $twig
         * @return string
         */
        public function showVersandkosten(Twig $twig) : string
        {
            return $twig -> render('CeresSchaffrath::StaticPages.Versandkosten');
        }

        public function showHilfe(Twig $twig) : string
        {
            $data = 164; // Category: static/Hilfe

            return $twig -> render('CeresSchaffrath::StaticPages.StaticCategory', $data);
        }

        public function showZahlungsarten(Twig $twig) : string
        {
            return $twig -> render('CeresSchaffrath::StaticPages.Zahlungsarten');
        }

        public function showKontakt(Twig $twig) : string
        {
            return $twig -> render('CeresSchaffrath::StaticPages.Kontakt');
        }


    }
