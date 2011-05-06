<?php

/*
 * This file is part of the ozfortressLapelBundle
 *
 * (c) Tim Nagel <tim@nagel.com.au>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace ozfortress\LapelBundle\Model;

use Symfony\Component\Security\Core\User\UserInterface;

abstract class UserRank implements UserRankInterface
{
    /**
     * User rank object id
     *
     * @var mixed
     */
    protected $id;

    /**
     * The FQCN of the user class.
     *
     * @var string
     */
    protected $class;

    /**
     * The unique user identifier, unique per FQCN.
     *
     * @var mixed
     */
    protected $identifier;
    
    /**
     * The provider alias for this user.
     *
     * @var string
     */
    protected $providerAlias;

    /**
     * The current rank index.
     * 
     * @var integer
     */
    protected $index;

    public function __construct(UserInterface $user)
    {
        $this->class      = get_class($user);
        $this->identifier = $user->getUsername();
    }

    /**
     * Returns the provider alias.
     *
     * @return string
     */
    public function getProviderAlias()
    {
        return $this->providerAlias;
    }

    /**
     * Returns the current rank index.
     *
     * @return integer
     */
    public function getIndex()
    {
        return $this->index;
    }
}