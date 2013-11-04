<?php

/*
 * This file is part of the MangopayBundle package.
 *
 * (c) Samuel Gordalina <https://github.com/gordalina/mangopay-bundle>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Gordalina\Bundle\MangopayBundle\DependencyInjection;

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
     * The kernel.debug value
     *
     * @var boolean
     */
    private $debug;

    /**
     * Constructor.
     *
     * @param boolean $debug The kernel.debug value
     */
    public function __construct($debug)
    {
        $this->debug = (boolean) $debug;
    }

    /**
     * {@inheritDoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('gordalina_mangopay');

        $rootNode
            ->children()
                ->scalarNode('partner')->isRequired()->end()
                ->booleanNode('sandbox')->defaultValue($this->debug)->end()
                ->scalarNode('private_key')->isRequired()->end()
                ->scalarNode('private_key_passphrase')->defaultValue('')->end()
            ->end()
        ;

        return $treeBuilder;
    }
}
