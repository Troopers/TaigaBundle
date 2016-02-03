<?php

namespace TaigaBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * This is the class that validates and merges configuration from your app/config files
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html#cookbook-bundles-extension-config-class}
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritdoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('taiga');
        $rootNode
            ->children()
                ->scalarNode("api_base_url")->defaultValue('https://api.taiga.io/api/v1')->end()
                ->scalarNode("api_token")->isRequired()->end()
            ->end();
        return $treeBuilder;
    }
}
