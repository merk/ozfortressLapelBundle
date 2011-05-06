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
 * @author Tim Nagel <tim@nagel.com.au>
 */
class Rank implements RankInterface
{
    /**
     * The ranks name.
     *
     * @var string
     */
    protected $name;

    /**
     * The rank image file.
     * 
     * @var null|File
     */
    protected $image;

    /**
     * Constructor.
     *
     * @param string $name
     * @param null|File $image
     */
    public function __construct($name, File $image = null)
    {
        $this->name  = $name;
        $this->image = $image;
    }

    /**
     * The ranks name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The rank image.
     * 
     * @return null|File
     */
    public function getImage()
    {
        return $this->image;
    }
}
