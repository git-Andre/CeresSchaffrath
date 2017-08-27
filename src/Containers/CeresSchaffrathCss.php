<?php

    namespace CeresSchaffrath\Containers;

    use Plenty\Plugin\Templates\Twig;

    class CeresSchaffrathCss {

        public function call(Twig $twig) : string
        {
            return $twig -> render('CeresSchaffrath::Containers.Head-link-css');
        }
    }
