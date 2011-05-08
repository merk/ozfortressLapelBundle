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
 * Rank provider for Australian Air Force.
 *
 * @author Tim Nagel <tim@nagel.com.au>
 */
class AustralianAirForce extends Provider
{
    protected $ranks = array(
        'Non-Commissioned Office Cadet',
        'Officer Cadet',
        'Pilot Officer',
        'Flying Officer',
        'Flight Lieutenant',
        'Squadron Leader',
        'Wing Commander',
        'Group Captain',
        'Air Commodore',
        'Air Vice Marshal',
        'Air Marshal',
        'Air Chief Marshal',
    );
}