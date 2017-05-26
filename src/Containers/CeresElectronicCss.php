<?php

namespace CeresElectronic\Containers;

use Plenty\Plugin\Templates\Twig;

class CeresElectronicCss
{
    public function call(Twig $twig):string
    {
        return $twig->render('CeresElectronic::Head-link-css');
    }
}
