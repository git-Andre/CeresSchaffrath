<?php

    namespace CeresSchaffrath\Providers;

    use IO\Extensions\Functions\Partial;
    use IO\Helper\TemplateContainer;
    use Plenty\Plugin\Events\Dispatcher;
    use Plenty\Plugin\ServiceProvider;
    use Plenty\Plugin\Templates\Twig;

// CERES Original
    // use IO\Extensions\Functions\Partial;
    // use IO\Helper\CategoryKey;
    // use IO\Helper\CategoryMap;
    // use IO\Helper\TemplateContainer;
    // use Plenty\Plugin\ServiceProvider;
    // use Plenty\Plugin\Templates\Twig;
    // use Plenty\Plugin\Events\Dispatcher;
    // use Plenty\Plugin\ConfigRepository;

    class CeresSchaffrathServiceProvider extends ServiceProvider {

        const EVENT_LISTENER_PRIORITY = 40;

        /**
         * Register the service provider.
         */

        public function register()
        {
            $this -> getApplication() -> register(CeresSchaffrathRouteServiceProvider::class);
        }

        public function boot(Twig $twig, Dispatcher $eventDispatcher)
        {

// provide template to use for homepage
            $eventDispatcher -> listen('IO.tpl.home', function (TemplateContainer $container, $templateData) {
                $container -> setTemplate("CeresSchaffrath::Homepage.Homepage");
                return false;
            }, self::EVENT_LISTENER_PRIORITY);

// provide template to use for single items
            $eventDispatcher -> listen('IO.tpl.item', function (TemplateContainer $container, $templateData) {
                $container -> setTemplate("CeresSchaffrath::Item.SingleItem");
                return false;
            }, self::EVENT_LISTENER_PRIORITY);

// provide template to use for Category items
             $eventDispatcher -> listen('IO.tpl.category.item', function (TemplateContainer $container, $templateData) {
                 $container -> setTemplate("CeresSchaffrath::Category.Item.CategoryItem");

                 return false;
             }, self::EVENT_LISTENER_PRIORITY);

//            Ceres::Category.Item.Partials.CategoryListItem

            $eventDispatcher -> listen('IO.init.templates', function (Partial $partial) {
                $partial -> set('footer', 'CeresSchaffrath::Footer.ThemeFooter');
            }, self::EVENT_LISTENER_PRIORITY);
        }
    }
