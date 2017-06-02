<?php

    namespace CeresSchaffrath\Containers;

    use Plenty\Plugin\Templates\Twig;

    class CeresSchaffrathLastSeenContainer {

        public function call(Twig $twig) : string
        {
            return $twig -> render('CeresSchaffrath::Containers.ItemLists.LastSeenItemList');
        }
    }