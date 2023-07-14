<?php
    declare(strict_types = 1);
    include "autoload.inc.php";

    $operator = $_POST['oper'];
    $number1 = $_POST['num1'];
    $number2 = $_POST['num2'];

    $calc = new Calc\Calc($operator, (int)$number1, (int)$number2);
    
    echo $calc->calculator();
?>