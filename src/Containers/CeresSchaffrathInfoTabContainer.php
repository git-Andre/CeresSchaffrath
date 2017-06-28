<?php

    namespace CeresSchaffrath\Containers;

    use Plenty\Plugin\Templates\Twig;

    class CeresSchaffrathInfoTabContainer {

        public function call(Twig $twig) : string
        {
            return $twig -> render('CeresSchaffrath::Containers.InfoSchaffrathTab');
        }
    }
