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


        public function showVersandkosten(Twig $twig) : string
        {
            return $twig -> render('CeresSchaffrath::StaticPages.Versandkosten');
        }

        public function showTest(Twig $twig) : string
        {
            return $twig -> render("Ceres::StaticPages.PrivacyPolicy");
            // return $twig -> render('Ceres::Containers.ItemLists.LastSeenItemList');

        }


    }
