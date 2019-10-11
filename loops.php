<?php
//loops execute code set no. of times

/*
for  (known no. of iteration)
while
do while
foreach
*/

//for
/*for($i = 0; $i <= 10; $i++){
echo 'Number'.$i;
echo '<br>';
}
*/

//while
/*$i = 0;

while($i < 10){
    echo $i;
    echo '<br>';
    $i++;
}
*/

//do..while run atleast one
/*$i = 0;
do{
echo $i;
echo '<br>';
$i++;
}

while($i<10);
*/

//foreach array sathe
/* indexed array
$people = array('Ram','Lakshman','Bharat','Shatrugna');
foreach($people as $person){
echo $person;
echo '<br>';
}

*/

//associative array 
$people = array('Ram' => 'ram@gmail.com','Lakshman' => 'l@gmail.com','Bharat'=>'bharat@gmail.com','Shatrugna'=> 'sh@gmail.com');
foreach($people as $person => $email){
echo $person.':'.$email;
echo '<br>';
} 
?>