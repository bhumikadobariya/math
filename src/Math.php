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
        $ta = abs($a);
        $tb = abs($b);
        while ($tb != 0) {
            $tmp = $tb;
            $tb = $ta % $tb;
            $ta = $tmp;
        }
        
        return $ta;
    }
    
    /**
     * Computes the least common multiple.
     * 
     * It uses reduction by the greatest common divisor.
     * 
     * @param int $a
     * @param int $b
     * 
     * @return int the least common multiple
     */
    public static function lcm($a, $b)
    {
        return (abs($a * $b) / self::gcd($a, $b));
    }
}
