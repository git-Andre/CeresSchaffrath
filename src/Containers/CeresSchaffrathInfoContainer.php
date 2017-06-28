<?php

    namespace CeresSchaffrath\Containers;

    use Plenty\Plugin\Templates\Twig;

    class CeresSchaffrathInfoContainer {

        public function call(Twig $twig, $variationData) : string
        {
            return $twig -> render('CeresSchaffrath::Containers.InfoSchaffrath', $variationData);
        }
    }
