<?php
//substr returns portion of string
//strlen length of string
//strpos position of first occurence
//strrpos position of last occurence
//trim remove whitespaces
//strtoupper uppercase
//strtolower lowercase
//ucwords capitalize every word
//str_replace replace all occurence of search string with a replacement
//is_string check if string (1 if true) 
//gzcompress compress a string
//gzuncompress uncompress a string

// $output =  substr('Hello',1,3);
 //$output =  substr('Hello',-2);
//$output =  strlen('Hello World');
 //echo $output;

//$output = strpos('Hello World','o');
//echo $output;

//$output = strrpos('Hello World','o');
//echo $output;

//$text = 'Hello World  ';
//var_dump($text);
//$trimmed = trim($text);
//var_dump($trimmed);

//$output = strtolower('Hello World');
//echo $output;

//$output = ucwords('hello world');
//echo $output;

// $text = 'Hello World';
// $output = str_replace('World','Mumbai',$text);
// echo $output;

// $v1 = 'hello';
// $output = is_string($v1);
// echo $output;

$values = array(true,false,null,'abc',3,'3',33.4,'33.4','',' ',0,'0');

foreach($values as $value){
    if(is_string($value)){
        echo "{$value} is a string<br>";
    }else{
        echo "{$value} is not a string<br>";
    }
}
?>