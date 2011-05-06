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

/**
 * Rank provider: provides a collection of ranks for a user.
 * They are indexed in integer order.
 *
 * @author Tim Nagel <tim@nagel.com.au
 */
interface RankProviderInterface
{
    /**
     * Returns the alias for the provider.
     *
     * @return string
     */
    function getAlias();

    /**
     * Return the rank for a specified index.
     *
     * @param integer $index
     * @return Rank
     */
    function getRank($index);

    /**
     * Returns the next index at the supplied offset or null if none available.
     *
     * @param integer $index The current index
     * @param integer $offset The next desired index
     * @return integer|null
     */
    function getIndexAtOffset($index, $offset);
}