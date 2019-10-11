<?php
//conditionals
/*
==
===
<
>
<=
>=
!=
!==

*/
/*
$num = 6;
if($num != 5){
    echo 'passed';
}else echo 'failed';
*/

//nested if 
//more than one => logical operators  && || xor
/*$num = 6;
if($num > 4 AND $num < 10){
    echo 'passed';
}*/

//Switches
$favColor = 'orange';

switch($favColor){
    case 'red':
    echo 'Color is red';
    break;
    case 'blue':
    echo 'Color is blue';
    break;
    case 'green':
    echo 'Color is green';
    break;
    default:
    echo 'Color is color';
    
}

?>