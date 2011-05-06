<?php

/*
 * This file is part of the ozfortressLapelBundle
 *
 * (c) Tim Nagel <tim@nagel.com.au>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace ozfortress\LapelBundle\Rank;

use Symfony\Component\HttpFoundation\File\File;
use RuntimeException;
    
/**
 * Abstract rank manager.
 *
 * @author Tim Nagel <tim@nagel.com.au>
 */
abstract class RankManager implements RankManagerInterface
{
    /**
     * An array of rank providers.
     * 
     * @var array of RankProviderInterface
     */
    protected $providers;

    /**
     * Constructor.
     *
     * @throws RuntimeException when no providers have been provided.
     * @param array $providers
     */
    public function __construct(array $providers)
    {
        if (!$providers) {
            throw new RuntimeException('No Rank providers have been supplied.');
        }

        foreach ($providers as $provider) {
            $this->providers[$provider->getAlias()] = $provider;
        }
    }

    /**
     * Returns a rank provider given its alias.
     *
     * @throws RuntimeException when the alias does not exist.
     * @param string $alias
     * @return RankProviderInterface
     */
    protected function getRankProvider($alias)
    {
        if (!array_key_exists($alias, $this->providers)) {
            throw new RuntimeException(sprintf('Rank provider "%s" does not exist', $alias));
        }

        return $this->providers[$alias];
    }
}