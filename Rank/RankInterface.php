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
 * Represents an individual rank.
 *
 * @author Tim Nagel <tim@nagel.com.au
 */
interface RankInterface
{
    /**
     * Returns the name of the rank.
     *
     * @return string
     */
    function getName();

    /**
     * Returns the File resource representing the rank image.
     *
     * @return File
     */
    function getImage();
}