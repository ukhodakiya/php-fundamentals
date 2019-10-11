<?php 
$loggedIn = false;
$arr = [1,2,3,4,5];
/*
if($loggedIn){
    echo 'You are logged in';
}else{
    echo 'You are NOT logged in';
}

//echo ($loggedIn) ? 'You are logged in' : 'You are NOT logged in';
$isRegistered = ($loggedIn == true) ? true : false;
echo $isRegistered;

//nested shorthand
$age = 20;
$score = 15;
//score > 10  => check age  => age >10 => avg else excep for age < 10
//score < 10 => check age => age > 10 => horrible else avg for age < 10
echo 'Your Score is '.($score > 10 ? ($age > 10 ? 'Average':'Exceptional'):($age > 10 ? 'Horrible':'Average'));
*/


?>

 <div>
 <?php if($loggedIn) { ?>
 <h1>Welcome User </h1>
 <?php } else {; ?>
    <h1>Welcome Guest </h1>
 <?php } ?>
 </div>

 <div>
 <?php if($loggedIn) : ?>
 <h1>Welcome User </h1>
 <?php else: ?>
 <h1>Welcome Guest</h1>
 <?php endif; ?>
 </div>

//same for array
//same for loop