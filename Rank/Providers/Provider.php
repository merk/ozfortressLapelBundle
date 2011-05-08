<?php

/*
 * This file is part of the ozfortressLapelBundle
 *
 * (c) Tim Nagel <tim@nagel.com.au>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace ozfortress\LapelBundle\Rank\Providers;

use ozfortress\LapelBundle\Rank\Rank;
use ozfortress\LapelBundle\Rank\RankProviderInterface;
use InvalidArgumentException;

/**
 * Rank provider for Australian Navy.
 *
 * @author Tim Nagel <tim@nagel.com.au>
 */
abstract class Provider implements RankProviderInterface
{
    /**
     * The alias for the Rank provider. Must be set in a child class.
     *
     * @var string
     */
    protected $alias;

    /**
     * A numerical keyed array of ranks. Must be continuous.
     * Must contain a starting rank at 0.
     * 
     * @var array
     */
    protected $ranks = array();

    /**
     * A numerical keyed array of rank images. Must match the
     * same numerical keys as the above $ranks array.
     *
     * @var array
     */
    protected $rankImages = array();

    /**
     * An array of cached Rank objects.
     *
     * @var array
     */
    private $rankCache;

    /**
     * Returns the alias for the rank provider.
     * 
     * @return string
     */
    public function getAlias()
    {
        return $this->alias;
    }

    /**
     * Returns the rank object at a specific index.
     *
     * @throws InvalidArgumentException when the index does not exist.
     * @param integer $index
     * @return Rank
     */
    public function getRank($index)
    {
        if (array_key_exists($index, $this->rankCache)) {
            return $this->rankCache[$index];
        }

        if (!array_key_exists($index, $this->ranks)) {
            throw new InvalidArgumentException(sprintf('Rank at index "%i" does not exist'));
        }

        // if (array_key_exists($index, $this->rankImages) && null !== $this->rankImages[$index]) {
        //     $image = new File($this->rankImages[$index]);
        // }

        return $this->rankCache[$index] = new Rank($this->ranks[$index]);
    }

    /**
     * Returns true if there is a rank at a given index.
     * 
     * @param integer $index
     * @return bool
     */
    public function hasRank($index)
    {
        return array_key_exists($index, $this->ranks);
    }
}