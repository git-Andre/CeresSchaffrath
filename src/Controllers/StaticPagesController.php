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
            // return $twig -> render('CeresSchaffrath::StaticPages.Versandkosten');
            return $twig -> render('Ceres::StaticPages.CancellationRights');
        }

        public function getTest(Twig $twig) : string
        {
            // $data = ['test', 'HAAAALOOO'];

            return $twig -> render('CeresSchaffrath::Test');
            // return $twig -> render('Ceres::Containers.ItemLists.LastSeenItemList');

        }


    }
