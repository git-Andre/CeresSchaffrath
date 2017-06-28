<?php

    namespace CeresSchaffrath\Containers;

    use Plenty\Plugin\Templates\Twig;

    class CeresSchaffrathInfoTab {

        public function call(Twig $twig) : string
        {
            return $twig -> render('CeresSchaffrath::Containers.InfoSchaffrathTab');
        }
    }
