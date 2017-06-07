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

    use IO\Helper\TemplateContainer;


    class StaticPagesController extends LayoutController {

        // public function showTermsAndConditions(Twig $twig) : string
        // {
        //     return $twig -> render('Ceres::StaticPages.TermsAndConditions');
        //
        // }

        public function showVersandkosten(Twig $twig) : string
        {
            return $twig -> render('CeresSchaffrath::StaticPages.Versandkosten');
        }

        public function showTermsAndConditions() : string
        {
            return $this -> renderTemplate(
                "tpl.terms-conditions",
                [
                    "object" => ""
                ]
            );
        }

    }