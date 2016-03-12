<?php

/**
 * This file is part of the Math library.
 *
 * @author Łukasz Makuch <kontakt@lukaszmakuch.pl>
 * @license MIT http://opensource.org/licenses/MIT
 */

namespace lukaszmakuch;

/**
 * Implements mathematical functions.
 * 
 * @author Łukasz Makuch <kontakt@lukaszmakuch.pl>
 */
class Math
{
    /**
     * Computes the greatest common divisor.
     * 
     * Uses the Euclidean algorithm.
     * 
     * @param int $a
     * @param int $b
     * 
     * @return int the greatest common divisor
     */
    public static function gcd($a, $b)
    {
        $a = abs($a);
        $b = abs($b);
        while ($b != 0) {
            $tmp = $b;
            $b = $a % $b;
            $a = $tmp;
        }
        
        return $a;
    }

}