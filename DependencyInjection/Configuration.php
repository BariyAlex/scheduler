<?php


namespace Scheduler\DependencyInjection;


use Symfony\Component\Config\Definition\Builder\ArrayNodeDefinition;
use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder('scheduler');

        /** @var ArrayNodeDefinition $root */
        $root = $treeBuilder->getRootNode();
        $root
            ->children()
                ->arrayNode('works')
                    ->arrayPrototype()
                        ->children()
                            ->scalarNode('service')->end()
                            ->scalarNode('method')->end()
                            ->scalarNode('interval')->cannotBeEmpty()->end()
                            ->scalarNode('enable')->defaultFalse()->end()
                        ->end()
                    ->end()
                ->end()
            ->end();

        return $treeBuilder;
    }
}