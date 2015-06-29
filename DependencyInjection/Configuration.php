<?php

namespace BeAdopt\CoreBundle\DependencyInjection;

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
        $rootNode = $treeBuilder->root('be_adopt_core');

        $rootNode
                ->children()
                    ->arrayNode('static_page')
                        ->children()
                            ->scalarNode('bundle_resources')->defaultValue('BeAdoptCoreBundle:StaticPage:')->end()
                            ->scalarNode('template_extends')->defaultValue('BeAdoptCoreBundle::frontend_layout.html.twig')->end()
                        ->end()
                    ->end()
                ->end();

        return $treeBuilder;
    }
}
