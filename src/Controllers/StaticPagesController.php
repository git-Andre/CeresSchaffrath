<?php
    /**
     * Created by PhpStorm.
     * User: andreoelschlaegel
     * Date: 26.05.17
     * Time: 23:17
     */

    namespace CeresElectronic\Controllers;

    use PhpParser\Node\Scalar\String_;
    use Plenty\Plugin\Controller;
    use Plenty\Plugin\Templates\Twig;

    class StaticPagesController extends Controller {

        public function call(Twig $twig, String $ziel) : string
        {
            return $twig -> render('CeresElectronic::Content.Test', $ziel);
        }
    }