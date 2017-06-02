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

        public function call(Twig $twig) : string
        {
            return $twig -> render('CeresSchaffrath::Content.Test');
        }
    }