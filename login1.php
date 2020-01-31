 <?php  
 
 session_start();
  $username="root";
  $password="root";
  $servername="localhost";
  $dbname = "tanya";
  $connc = new mysqli($servername,$username,$password,$dbname);
  $_SESSION['username'] = $connc ->real_escape_string($_POST['user']);
  $pswd = $connc->real_escape_string($_POST['pass']);
  $_SESSION['password'] = hash('sha512',$pswd);
    $sql = "SELECT username,password FROM admin1";
  $result = $connc->query($sql);
  $data = $result->fetch_assoc();
  if($_SESSION['username']==$data["username"] && $data['password']==$_SESSION['password']){
        echo $_SESSION['password'];
            header('Location:patients.php');
}
  else{ 
    echo "<script type='text/javascript'>alert('Wrong credentails')</script>";
    echo "<h1> Press back to go back to the login page and input correct credentials </h1>";
  }

  ?> 
 