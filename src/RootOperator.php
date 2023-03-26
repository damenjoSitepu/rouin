<?php 

namespace damenjositepu\Rouin;

class RootOperator {
    /**
     * Operator type here
     * 
     * @var string
     */
    private $operatorType = "+";

    /**
     * Number argument
     * 
     * @var int 
     */
    private $number = 1;

    /**
     * Result of number
     * 
     * @var int
     */
    private $numberResult = 0;

    public function __construct(string $operatorType = '+', int $number = 1)
    {
        $this->operatorType = $operatorType;
        $this->number = $number;
    }

    public function count(): int
    {
        if ($this->operatorType === "+") $this->add();
        else if ($this->operatorType === "-") $this->substract();
        else if ($this->operatorType === "*") $this->times();
        return $this->numberResult;
    }

    private function add()
    {
        $this->numberResult = $this->number + $this->number;
    }

    private function substract()
    {
        $this->numberResult = $this->number - $this->number;
    }

    private function times()
    {
        $this->numberResult = $this->number * $this->number;
    }
}