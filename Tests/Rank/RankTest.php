<?php

/*
 * This file is part of the ozfortressLapelBundle
 *
 * (c) Tim Nagel <tim@nagel.com.au>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace ozfortress\LapelBundle\Tests\Rank;

use ozfortress\LapelBundle\Rank\Rank;
use Symfony\Component\HttpFoundation\File\File;

/**
 * Rank test.
 *
 * @author Tim Nagel <tim@nagel.com.au>
 */
class RankTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test that a Rank object behaves as expected.
     *
     * @covers Rank::getName
     * @covers Rank::getImage
     */
    public function testRank()
    {
        $name = 'Private';
        $image = $this->getMock('Symfony\Component\HttpFoundation\File\File');

        $rank = new Rank($name, $image);

        $this->assertEquals($name, $rank->getName());
        $this->assertEquals($image, $rank->getImage());
    }
}
