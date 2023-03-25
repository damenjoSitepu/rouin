<?php 

namespace damenjositepu\Rouin;

class CountNumber {
    /**
     * Indicates secret number 
     * 
     * @var int
     */
    private static int $secretNumber = 0;

    /**
     * Increment the secret number
     * 
     * @return static
     */
    public static function inc(): static 
    {
        self::$secretNumber += 1;
        return new static;
    }

    /**
     * Decrement the secret number
     * 
     * @return static
     */
    public static function dec(): static 
    {
        self::$secretNumber -= 1;
        return new static;
    }

    /**
     * Get secret number by public 
     * 
     * @return int
     */
    public static function get(): int 
    {
        return self::$secretNumber;
    }
}