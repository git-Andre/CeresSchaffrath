<?php

namespace CeresElectronic\Providers;

use IO\Extensions\Functions\Partial;
use IO\Helper\TemplateContainer;
use Plenty\Plugin\Events\Dispatcher;
use Plenty\Plugin\ServiceProvider;
use Plenty\Plugin\Templates\Twig;

class CeresElectronicServiceProvider extends ServiceProvider
{
    const EVENT_LISTENER_PRIORITY = 90;

    /**
     * Register the service provider.
     */

    public function register()
    {
        // $this->getApplication()->register(TopItemsRouteServiceProvider::class);
    }

    public function boot(Twig $twig, Dispatcher $eventDispatcher)
    {

        // provide template to use for homepage
        $eventDispatcher->listen('IO.tpl.home', function (TemplateContainer $container, $templateData) {
            $container->setTemplate("CeresElectronic::Content.TopItems");
            return false;
        }, self::EVENT_LISTENER_PRIORITY);


        $eventDispatcher->listen('IO.init.templates', function (Partial $partial) {
            $partial->set('footer', 'CeresElectronic::Footer.ThemeFooter');
        }, self::EVENT_LISTENER_PRIORITY);

        // provide template to use for single items
        $eventDispatcher->listen('IO.tpl.item', function (TemplateContainer $container, $templateData) {
            $container->setTemplate("CeresElectronic::Item.SingleItem");
            return false;
        }, self::EVENT_LISTENER_PRIORITY);
    }
}
