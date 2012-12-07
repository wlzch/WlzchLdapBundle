<?php

namespace Wlzch\LdapBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('wlzch_ldap');
        $rootNode
            ->children()
                ->arrayNode('options')
                    ->children()
                        ->ScalarNode('host')
                            ->isRequired()
                            ->cannotBeEmpty()
                        ->end()
                        ->ScalarNode('port')
                            ->defaultValue(389)
                        ->end()
                        ->ScalarNode('baseDn')
                            ->isRequired()
                            ->cannotBeEmpty()
                        ->end()
                        ->booleanNode('bindRequiresDn')
                            ->defaultTrue()
                        ->end()
                    ->end()
                ->end()
            ->end()
        ;

        return $treeBuilder;
    }
}
