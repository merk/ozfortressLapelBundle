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

/**
 * Rank provider for London Police force.
 *
 * @author Tim Nagel <tim@nagel.com.au>
 */
class LondonPolice extends Provider
{
    protected $ranks = array(
        'Police Constable',
        'Sergeant',
        'Insector',
        'Chief Inspector',
        'Superintendent',
        'Chief Superintendent',
        'Commander',
        'Deputy Assistant Commissioner',
        'Assistant Commissioner',
        'Deputy Commissioner',
        'Commissioner',
    );
}