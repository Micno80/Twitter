<?php
//poniżej napisz kod definiujący klasę

class Calculator
{
    public $history = [];

    public function add(float $num1, float $num2)
    {
        $result = $num1 + $num2;
        array_push($this->history, "added $num1 to $num2 got $result");
        return $result;
    }

    public function multiply(float $num1, float $num2): float
    {
        $result = $num1 * $num2;
        array_push($this->history, "multiplied $num1 with $num2 got $result");
        return $result;
    }

    public function subtract(float $num1, float $num2)
    {
        $result = $num1 - $num2;
        array_push($this->history, "substarcted $num1 from $num2 got $result");
        return $result;
    }

    public function divide(float $num1, float $num2): float
    {
        $result = $num1 / $num2;
        array_push($this->history, "divided $num1 by $num2 got $result");
        return $result;
    }

    public function printOperations()
    {
        foreach ($this->history as $record) {
            echo $record . "<br>";
        }
    }

    public function clearOperations()
    {
        $this->history = [];
    }
}

$res = new Calculator();
$res->add(18, 3);
$res->subtract(18, 3);
$res->multiply(18, 3);
$res->divide(18, 3);
$res->printOperations();
$res->clearOperations();
$res->printOperations();
