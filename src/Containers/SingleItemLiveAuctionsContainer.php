<?php

    namespace CeresSchaffrath\Containers;

    use Plenty\Plugin\Templates\Twig;

    class SingleItemLiveAuctionsContainer {

        public function call(Twig $twig) : string
        {
            return $twig -> render('CeresSchaffrath::Containers.SingleItemLiveAuctions');
        }
    }
