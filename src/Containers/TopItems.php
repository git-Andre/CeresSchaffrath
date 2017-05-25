<?php

    namespace CeresElectronic\Containers;

    use Plenty\Modules\Item\DataLayer\Contracts\ItemDataLayerRepositoryContract;
    // use Plenty\Plugin\Controller;
    use Plenty\Plugin\Templates\Twig;


    class TopItems {

        public function call(Twig $twig, ItemDataLayerRepositoryContract $itemRepository) : string
        {

            $itemColumns = [
                'itemDescription'      => [
                    'name1',
                    'description'
                ],
                'variationBase'        => [
                    'id'
                ],
                'variationRetailPrice' => [
                    'price'
                ],
                'variationImageList'   => [
                    'path',
                    'cleanImageName'
                ]
            ];

            $itemFilter = [
                'itemBase.isStoreSpecial' => [
                    'shopAction' => [3]
                ]
            ];

            $itemParams = [
                'language' => 'de'
            ];

            $resultItems = $itemRepository
                -> search($itemColumns, $itemFilter, $itemParams);

            $items = array ();
            foreach ($resultItems as $item) {
                $items[] = $item;
            }
            $templateData = array (
                'resultCount'  => $resultItems -> count(),
                'currentItems' => $items
            );

            return $twig -> render('CeresElectronic::Content.TopItems', $templateData);
        }
    }
