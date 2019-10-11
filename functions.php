<?php
//functions block of code that can be repeatedly called

/*
camelCase myFunction()
lowercase my_function()
pascalcase MyFunction() oop classes
*/

//create function
function simpleFunction(){
    echo 'Hello Function';
}

//run function
//simpleFunction();

//func with paramater
function sayHello($name = 'World'){
echo "Hello $name<br>";
}
/*
sayHello('Joe');
sayHello('Bob');
sayHello('John');
sayHello();

*/

//print_r var_dump

//return values from functions
function addNumber($num1,$num2){
    return $num1 + $num2;

}

//echo addNumber(2,3);

// value by reference
$myNum = 10;

function addFive($num){
    $num += 5;
}

function addTen(&$num){
    $num += 10;
}

echo addFive($myNum);
echo "Value: $myNum <br>";

echo addTen($myNum);
echo "Value: $myNum<br>"
?>
