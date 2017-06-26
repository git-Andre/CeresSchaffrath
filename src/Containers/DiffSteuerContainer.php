<?php

    namespace CeresSchaffrath\Containers;

    use Plenty\Modules\Item\DataLayer\Contracts\ItemDataLayerRepositoryContract;
    use Plenty\Plugin\Templates\Twig;

    // use IO\Builder\Item\Fields\ItemCrossSellingFields;
    // use IO\Builder\Item\Fields\ItemDescriptionFields;
    // use IO\Builder\Item\Fields\VariationAttributeValueFields;
    // use IO\Builder\Item\Fields\VariationBaseFields;
    // use IO\Builder\Item\ItemColumnBuilder;
    // use IO\Builder\Item\ItemFilterBuilder;
    // use IO\Builder\Item\ItemParamsBuilder;
    // use IO\Builder\Item\Params\ItemColumnsParams;
    // use IO\Constants\CrossSellingType;
    // use IO\Constants\ItemConditionTexts;
    // use IO\Constants\Language;
    // use Plenty\Modules\Cloud\ElasticSearch\Lib\ElasticSearch;
    // use Plenty\Modules\Cloud\ElasticSearch\Lib\Processor\DocumentProcessor;
    // use Plenty\Modules\Cloud\ElasticSearch\Lib\Search\Document\DocumentSearch;
    // use Plenty\Modules\Cloud\ElasticSearch\Lib\Source\IncludeSource;
    // use Plenty\Modules\Item\Attribute\Contracts\AttributeNameRepositoryContract;
    // use Plenty\Modules\Item\Attribute\Contracts\AttributeValueNameRepositoryContract;

    use Plenty\Modules\Item\DataLayer\Models\Record;

    // use Plenty\Modules\Item\DataLayer\Models\RecordList;
    // use Plenty\Modules\Item\Search\Aggregations\AttributeValueListAggregation;
    // use Plenty\Modules\Item\Search\Aggregations\AttributeValueListAggregationProcessor;
    // use Plenty\Modules\Item\Search\Contracts\VariationElasticSearchSearchRepositoryContract;
    // use Plenty\Modules\Item\Search\Filter\CategoryFilter;
    // use Plenty\Modules\Item\Search\Filter\ClientFilter;
    // use Plenty\Modules\Item\Search\Filter\SearchFilter;
    // use Plenty\Modules\Item\Search\Filter\VariationBaseFilter;
    // use Plenty\Plugin\Application;


    class DiffSteuerContainer {

        public function call(Twig $twig, $itemData) : string
        {
            return $twig -> render('CeresSchaffrath::Containers.DiffSteuer', $itemData);
        }
    }
