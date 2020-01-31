<?php
session_start();
if(isset($_POST['submit'])){
$name = $_POST['name'];
$email = $_POST["email"];
$number = $_POST['number'];
$y = is_numeric($number);
$time = $_POST['time'];
$date = $_POST['date'];
if(empty($name)){
    $msg1 = "Invalid name";
    $i = 0;
}
else{
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $emailErr = "Invalid email format";
    $i = 0;
    }
    else{
        if($y==FALSE||strlen($number)!=10){
        $phnerr = "Invalid Number";
        $i = 0;
        }
        else{
            $i=1;
        }
    }
}
}
session_destroy();
?>