<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="style.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script type="text/javscript" language="javascript">
  window.history.forward();
  </script>
</head>
<body>
 <div class="container pt-3" id="first">
 <h1 class="display-5" id="firsttext">Hello,Login to access the data of your patients.</h1>
 </div>
 <div class="container" id="second">
   <div class="login">
    <form action="login1.php" method="POST">
    <div class="logintext">
    <h2 id="userlogin" style = "color:yellow;font-family:cursive;">USER LOGIN</h2>
    </div>
    <p id="us" style="font-family:cursive;">Username:</p>
  <input type="text" placeholder="Username" id="username" name="user"required><br/> 
  <p id="us"style="font-family:cursive;">Password:</p>
  <input type="password" placeholder="Password" id="password"name="pass" required>  </br>
    </label>
  <div class="submitbtn">
  <input type="submit" value="Login" id="loginbtn">
  </div>
  </form>
</div>
</div>
</body>
</html>