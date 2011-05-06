<?php

/*
 * This file is part of the ozfortressLapelBundle
 *
 * (c) Tim Nagel <tim@nagel.com.au
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace ozfortress\LapelBundle\Rank;

use Symfony\Component\HttpFoundation\File\File;

/**
 * Rank provider: provides a rank strategy
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
     * @return string
     */
    function getRankName($index);

    /**
     * Returns the image resource for a specified index, if
     * it exists.
     *
     * @param integer $index
     * @return File
     */
    function getRankImage($index);
}