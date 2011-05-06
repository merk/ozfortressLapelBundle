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

use Symfony\Component\Security\Core\User\UserInterface;

/**
 * Rank Manager
 *
 * @author Tim Nagel <tim@nagel.com.au
 */
interface RankManagerInterface
{
    /**
     * Returns the current rank for a user.
     *
     * @param UserInterface $user
     * @return
     */
    function getRank(UserInterface $user);
}