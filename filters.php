<?php

//check for posted data
/*
if(filter_has_var(INPUT_POST,'data')){
    echo 'Data Found';
}else{
    echo 'No Data';
}


if(filter_has_var(INPUT_POST,'data')){
    $email = $_POST['data'];

    //remove illegal chars
    $email = filter_var($email,FILTER_SANITIZE_EMAIL);
    echo $email.'<br>';

    if(filter_var($email,FILTER_VALIDATE_EMAIL)){
        echo 'Email is valid';
    } else {
        echo 'Email is not valid';
    }   
}
// FILTER_VALIDATE_BOOLEAN, EMAIL, FLOAT, INT, IP, REGEXP, URL

//FILTER_SANITIZE_EMAIL, ENCODED, NUMBER_FLOAT, NUMBER_INT, SPECIAL_CHARS,STRING, URL
$var = '20';

if(filter_var($var,FILTER_VALIDATE_INT)){
    echo $var.' is a number';
}else{
    echo $var.' is NOT a number';
}

$var = '<script>alert(1)</script>';
echo filter_var($var,FILTER_SANITIZE_SPECIAL_CHARS);
*/
$filters = array(
    "data" => FILTER_VALIDATE_EMAIL,
    "data2" => array(
        "filter" => FILTER_VALIDATE_INT,
        "options"=> array(
            "min_range" => 1,
            "max_range" => 100
        )
    )
);

print_r(filter_input_array(INPUT_POST,$filters));
?>


<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<input type="text" name="data">
<input type="text" name="data2">
<button type="submit">Submit</button>
</form>