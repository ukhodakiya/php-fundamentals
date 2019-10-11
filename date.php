<?php
//echo date('Y/m/d'); //day
// m  month
//Y year
// l wednesday
// // --

//set timezone
date_default_timezone_set('America/New_York');
//echo date('h:i:sa');
//h hour
//i minute
//s seconds
// a am pm 

$timestamp = mktime('10,14,54,9,10,1981');
echo date('m/d/Y h:i:sa', $timestamp);
?>