<?php

namespace DigitalAp\FcmHttpBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * This is the class that validates and merges configuration from your app/config files.
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/configuration.html}
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritdoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder('fcm_http');

        $treeBuilder->getRootNode()
            ->children()
            ->scalarNode('autentication_api_key')->isRequired()->cannotBeEmpty()->end()
            ->scalarNode('api_url')->defaultValue('https://fcm.googleapis.com/fcm/send')->end()
            ->end();

        return $treeBuilder;
    }
}
