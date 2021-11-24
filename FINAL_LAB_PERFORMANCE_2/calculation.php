<?php


    $equal = $_REQUEST['equal'];
    $operator = $_REQUEST['operator'];
    $number = $_REQUEST['value'];
   

    function addition(){
        $num1 = $number;
        $num2 = $number;
        return $num1+$num2;
    }

    function deletion(){
        $num1 = $number;
        $num2 = $number;
        return $num1-$num2;
    }

    function multiplication(){
        $num1 = $number;
        $num2 = $number;
        return $num1*$num2;
    }

    function devition(){
        $num1 = $number;
        $num2 = $number;
         return $num1/$num2;
    }

 
    switch ($operator) {
    case '+':
        $result = addition();
        echo $result;
        break;
    case '-':
        $result = subtraction();
        echo $result;
        break;
    case '*':
        $result = multiplication();
        echo $result;
        break;
    case '/':
        $result = divition();
        echo $result;
        break;
    default:
        echo 'Invalid Operator';
        break;
}

?>