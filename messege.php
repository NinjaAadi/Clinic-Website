<?php
session_start();
if(isset($_POST['submit1'])){
$na = $_POST['name2'];
$ph = $_POST['phone2'];
$em = $_POST['email2'];
$mes = $_POST['messege2'];
if(empty($na)){
    $j = 0;
}
else{
    if(!filter_var($em, FILTER_VALIDATE_EMAIL)) {
   $j = 0;
    }
    else{
        if(strlen($ph)!=10){
        $j = 0;
        }
        else{
            if(empty($mes)){
                $j = 0;
            }
            else{
               $j = 1;
            }
        }
    }
}
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "tanya";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$na = $conn ->real_escape_string($_POST['name2']);
$ph = $conn ->real_escape_string($_POST['phone2']);
$em = $conn ->real_escape_string($_POST['email2']);
$mes = $conn ->real_escape_string($_POST['messege2']);
if($j!= 0){
 $stmt = $conn->prepare("INSERT INTO messege(name, phone,email,messege) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss",$na,$ph, $em,$mes);
if($stmt->execute()){
  echo "<script type='text/javascript'>
  if (window.confirm('Your messege has been sent successfully.Go back to the home page.'))
{
}
else
{
    // They clicked no
}
  </script>";
  session_destroy();
}
}
else{
      echo "<script type='text/javascript'>
  if (window.confirm('Please fill the form properly'))
{
}
else
{
    // They clicked no
}
  </script>";
  session_destroy();
}
}
?>