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

        public function showTermsAndConditions(Twig $twig) : string
        {
            return $twig -> render('Ceres::StaticPages.TermsAndConditions');

        }

        public function showVersandkosten(Twig $twig) : string
        {
            return $twig -> render('CeresSchaffrath::StaticPages.Versandkosten');
        }

    }