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
 * Rank provider for Australian Navy.
 *
 * @author Tim Nagel <tim@nagel.com.au>
 */
class AustralianNavy extends Provider
{
    protected $alias = 'australian-navy';
    
    protected $ranks = array(
        'Midshipman',
        'Acting Sub Lieutenant',
        'Sub Lieutenant',
        'Lieutenant',
        'Lieutenant Commander',
        'Commander',
        'Captain',
        'Commodore',
        'Rear Admiral',
        'Vice Admiral',
        'Admiral',
    );
}