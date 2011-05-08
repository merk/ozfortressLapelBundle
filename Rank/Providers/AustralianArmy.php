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
 * Rank provider for Australian Army.
 *
 * @author Tim Nagel <tim@nagel.com.au>
 */
class AustralianArmy extends Provider
{
    protected $ranks = array(
        'Officer Cadet',
        'Second Lieutenant',
        'Lieutenant',
        'Captain',
        'Major',
        'Lieutenant-Colonel',
        'Colonel',
        'Brigadier-General',
        'Major-General',
        'Lieutenant-General',
        'General',
        'Field Marshall',
    );
}