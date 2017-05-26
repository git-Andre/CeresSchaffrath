<?php

    namespace CeresElectronic\Containers;

    use Plenty\Plugin\Templates\Twig;

    class DiffSteuerContainer {

        public function call(Twig $twig) : string
        {
            return $twig -> render('CeresElectronic::Containers.DiffSteuer');
        }
    }
