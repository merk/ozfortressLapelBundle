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

use Symfony\Component\Security\Core\User\UserInterface;

/**
 * Rank Manager
 *
 * @author Tim Nagel <tim@nagel.com.au
 */
interface RankManagerInterface
{
    /**
     * Returns the current rank for a user. If the user has no
     * rank yet, it should return rank 0 for the default rank.
     *
     * @param UserInterface $user
     * @return Rank
     */
    function getRank(UserInterface $user);

    /**
     * Promotes the user by the specified number of ranks.
     *
     * @param UserInterface $user
     * @param integer $indexOffset
     * @return void
     */
    function promote(UserInterface $user, $indexOffset = 1);

    /**
     * Demotes a user by the specified number of ranks.
     *
     * @param UserInterface $user
     * @param integer $indexOffset
     * @return void
     */
    function demote(UserInterface $user, $indexOffset = 1);
}