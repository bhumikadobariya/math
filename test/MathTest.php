<?php

/**
 * This file is part of the Math library.
 *
 * @author Łukasz Makuch <kontakt@lukaszmakuch.pl>
 * @license MIT http://opensource.org/licenses/MIT
 */

namespace lukaszmakuch;

class MathTest extends \PHPUnit_Framework_TestCase
{
    public function testGreatestCommonDivisor()
    {
        $this->assertEquals(21, Math::gcd(1071, 462));
        $this->assertEquals(21, Math::gcd(-1071, -462));
    }
}
