<?php
$path ='/dir0/dir1/myfile.php';
$file = 'file1.txt';

//return filename
//echo basename($path);

//return filename without ext
//echo basename($path,'.php');

//dirname
//echo dirname($path);

//check if file exists  -> files/folders
//echo file_exists($file)

//get abs path
//echo realpath($file);

//checks to see if file
//echo is_file($file);

//check if file is writable
//echo is_writable($file);


//check if file is readable
//echo is_readable($file);

//get file size
//echo filesize($file);

//create a directory
//mkdir('testing');

//delete directory if empty
//rmdir('testing');

//copy file
//echo copy('file1.txt','file2.txt');

//rename file
//rename('file2.txt','myfile.txt');

//delete file
//unlink('myfile.txt');

//write from file to string
//echo file_get_contents($file);

//write string to file -> replace
//echo file_put_contents($file,'good evening');

/* concat
$current = file_get_contents($file);
$current .= 'Good Evening';
file_put_contents($file,$current);
*/

//open file for reading
/*$handle = fopen($file,'r');
$data = fread($handle, filesize($file));
echo $data;
fclose($handle); */

//open file for writing
$handle = fopen('file2.txt','w');
$text = "Johnny English\n";
fwrite($handle,$text);
$text = "Amar Virdi\n";
fwrite($handle,$text);
fclose($handle);
 


?>
