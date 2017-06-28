<?php

    namespace CeresSchaffrath\Containers;

    use Plenty\Plugin\Templates\Twig;

    class CeresSchaffrathInfoSchaffrath {

        public function call(Twig $twig) : string
        {
            return $twig -> render('CeresSchaffrath::Partials.InfoSchaffrath');
        }
    }
