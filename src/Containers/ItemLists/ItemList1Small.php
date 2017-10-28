<?php

    namespace CeresSchaffrath\Containers\ItemLists;

    use Plenty\Plugin\Templates\Twig;

    class ItemList1Small
    {
        public function call(Twig $twig) : string
        {
            return $twig -> render('CeresSchaffrath::Containers.ItemLists.ItemList1Small');
        }
    }
