<?php 

namespace damenjositepu\Rouin;

use damenjositepu\Rouin\RootOperator;

class Operator {
    /**
     * Define count result
     * 
     * @var int
     */
    private static int $countResult = 1;

    public static function choose(string $operatorType = "+", int $number = 1)
    {
        $rootOperator = new RootOperator($operatorType, $number);
        self::$countResult = $rootOperator->count();
 
        return new static;
    }

    public static function pass(int $numberCondition = 0)
    {
        if (self::$countResult < $numberCondition) {
            throw new \Exception('Count Result Not Passed Enough!');
        }
        return new static;
    }

    public static function get()
    {
        $countResult = self::$countResult;
        self::$countResult = 0;
        return $countResult;
    }
}