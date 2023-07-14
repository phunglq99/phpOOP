<?php
    namespace Calc;
    class Calc {
        private $operator;
        private $number1;
        private $number2;

        public function __construct(string $operator, int $number1, int $number2) {
            $this->operator = $operator;
            $this->number1 = $number1;
            $this->number2 = $number2;
        }
        public function calculator() {
            switch($this->operator) {
                case 'add':
                    $result = $this->number1 + $this->number2;
                    return $result;
                case 'sub':
                    $result = $this->number1 - $this->number2;
                    return $result;
                case 'div':
                    $result = $this->number1 / $this->number2;
                    return $result;
                case 'mul':
                    $result = $this->number1 * $this->number2;
                    return $result;
                default:
                    echo 'Error';
                    break;
            }
        }

    }
?>