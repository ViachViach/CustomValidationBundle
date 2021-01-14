<?php

declare(strict_types=1);

namespace CustomValidationBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

final class Configuration implements ConfigurationInterface
{

    public function getConfigTreeBuilder(): TreeBuilder
    {
        $treeBundle = new TreeBuilder('custom_validation');

        return $treeBundle;
    }
}
