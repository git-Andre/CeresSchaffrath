<?php

    namespace CeresElectronic\Containers;

    use Plenty\Plugin\Templates\Twig;

    class CeresElectronicLastSeenContainer {

        public function call(Twig $twig) : string
        {
            return $twig -> render('CeresElectronic::Containers.ItemLists.LastSeenItemList');
        }
    }