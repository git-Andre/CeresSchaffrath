<?php

    namespace CeresSchaffrath\Controllers;

    use Plenty\Plugin\Controller;
    use Plenty\Plugin\Templates\Twig;

    class StaticPagesRoutesController extends Controller {

        const CAT_HILFE = 164;
        const CAT_KONTAKT = 449;
        const CAT_VERSAND = 168;
        const CAT_ZAHLUNG = 166;

        public function showVersandkosten(Twig $twig) : string
        {
            $categoryId = array ('category' => self::CAT_VERSAND);

            return $twig -> render('CeresSchaffrath::StaticPages.StaticCategory', $categoryId);
        }

        public function showHilfe(Twig $twig) : string
        {
            $categoryId = array ('category' => self::CAT_HILFE);

            return $twig -> render('CeresSchaffrath::StaticPages.StaticCategory', $categoryId);
        }

        public function showZahlungsarten(Twig $twig) : string
        {
            $categoryId = array ('category' => self::CAT_ZAHLUNG);

            return $twig -> render('CeresSchaffrath::StaticPages.StaticCategory', $categoryId);
        }

        public function showKontakt(Twig $twig) : string
        {
            $categoryId = array ('category' => self::CAT_KONTAKT);

            return $twig -> render('CeresSchaffrath::StaticPages.StaticCategory', $categoryId);
        }

//Static Legals
        public function showImpressum(Twig $twig) : string
        {
            return $twig -> render('CeresSchaffrath::StaticPages.Impressum');
        }

        public function showDatenschutz(Twig $twig) : string
        {
            return $twig -> render('CeresSchaffrath::StaticPages.Datenschutz');
        }

        public function showWiderruf(Twig $twig) : string
        {
            return $twig -> render('CeresSchaffrath::StaticPages.Widerruf');
        }

        public function showAgb(Twig $twig) : string
        {
            return $twig -> render('CeresSchaffrath::StaticPages.Agb');
        }

    }