<?php

    namespace CeresSchaffrath\Containers;

    use Plenty\Plugin\Templates\Twig;

    class DiffSteuerContainer {

        public function call(Twig $twig, $itemData) : string
        {
            return $twig -> render('CeresSchaffrath::Containers.DiffSteuer', $itemData);
        }
    }
