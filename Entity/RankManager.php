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

use Doctrine\ORM\EntityManager;
use ozfortress\LapelBundle\Rank\RankInterface;
use ozfortress\LapelBundle\Rank\RankManager as BaseRankManager;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * Rank Manager that uses Doctrine ORM to store rank information.
 *
 * @author Tim Nagel <tim@nagel.com.au>
 */
class RankManager extends BaseRankManager
{
    /**
     * @var EntityManager
     */
    protected $em;

    /**
     * @var string
     */
    protected $userRankClass;

    /**
     * Constructor.
     *
     * @param array $providers
     * @param EntityManager $em
     */
    public function __construct(array $providers, EntityManager $em, $userRankClass)
    {
        $this->em             = $em;
        $this->repository     = $em->getRepository($userRankClass);
        $this->rankStoreClass = $em->getClassMetadata($userRankClass)->name;

        parent::__construct($providers);
    }

    /**
     * Returns the users rank storage object.
     *
     * @return UserRankInterface
     */
    protected function getUserRank(UserInterface $user)
    {
        $userRank = $this->repository->findBy(array(
            'class' => get_class($user),
            'identifier' => $user->getUsername()
        ));

        return $userRank;
    }

    /**
     * Returns the current rank of the user.
     *
     * @param UserInterface $user
     * @return RankInterface
     */
    public function getRank(UserInterface $user)
    {
        $userRank = $this->getUserRank($user);
        $provider = $this->getRankProvider($userRank->getProviderAlias());

        return $provider->getRank($userRank->getIndex());
    }

    /**
     * Promotes a user by the number of ranks provided.
     *
     * @param UserInterface $user
     * @param integer $noRanks
     * @return void
     */
    public function promote(UserInterface $user, $ranks = 1)
    {
        $userRank = $this->getUserRank($user);
        $provider = $this->getRankProvider($userRank->getProviderAlias());
        $newRankIndex = $provider->getIndexAtOffset($userRank->getIndex(), $ranks);

        $userRank->setIndex($newRankIndex);
        $this->em->persist($userRank);
        $this->em->flush();
    }

    /**
     * Demotes a user by the number of ranks provided.
     *
     * @param UserInterface $user
     * @param integer $noRanks
     * @return void
     */
    public function demote(UserInterface $user, $ranks = 1)
    {
        $this->promote($user, -1 * abs($ranks));
    }
}