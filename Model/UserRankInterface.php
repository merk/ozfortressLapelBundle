<?php

/*
 * This file is part of the ozfortressLapelBundle
 *
 * (c) Tim Nagel <tim@nagel.com.au>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace ozfortress\LapelBundle\Entity;

/**
 * Storage object for storing the users rank level and provider.
 *
 * @author Tim Nagel <tim@nagel.com.au>
 */
interface UserRankInterface
{
    /**
     * Returns the provider alias.
     *
     * @return string
     */
    function getProviderAlias();

    /**
     * Returns the current ranking index.
     * @return integer
     */
    function getIndex();
}