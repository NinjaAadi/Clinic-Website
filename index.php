<DOCTYPE! html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="appointment.css" type="text/css" rel="stylesheet">
    <link href="style/style1.css" type="text/css" rel="stylesheet">
    <linl href="messegebox.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Kulim+Park&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cabin|Cookie|Handlee|Inconsolata|Philosopher|Satisfy|Signika&display=swap" rel="stylesheet">
    <style> 
      body{
         font-family: 'Kulim Park', sans-serif;
         background-repeat:no-repeat;
      }
 
            @media only screen and (max-width:600px){
    #fh{
        margin-left:14%;
        font-size:40px;
    }
    #sh{
        margin-left:10%;
        font-size:20px;
    }
    .box{
      width:100%;
    }
  }
 
.box{
  width:310px;
  height:220px;
  overflow:hidden;
  display:inline-block;
  justify-content:center;
  align-items:center;
  background-size:cover;
  color:lightgreen;
}
.cont{
  width:80%;
  height:230px;
  overflow:auto;
  white-space:nowrap;

}
.inp,.inp1,.inp2{
  width:100%;
border:1px solid black;
padding:15px;
background:#98FB98	;
}
.inp2{
  height:150px;
}
.inp::placeholder,.inp1::placeholder,.inp2::placeholder{
  color:black;
}

    </style>
</head>
    <title>Document</title>
</head>
<body>
        <?php require 'appointment.php';?>

 
    <nav class="navbar navbar-expand-md  navbar-dark bg sticky-top"style="width:100%;">
      <a class="navbar-brand" href="#" style="font-family: 'Satisfy', cursive; color:yellow; font-size:25px;">Bharti Dental Clinic</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                  <span class="navbar-toggler-icon"></span>
                    </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
              <ul class="navbar-nav">
                  <li class="nav-item">
                        <a class="nav-link" href="#"style="font-size:20px;font-family: 'Signika', sans-serif;">Home</a>
                        </li>
                           <li class="nav-item">
                             <a class="nav-link" href="#appointments"style="font-size:20px;font-family: 'Signika', sans-serif;">Appointments</a>
                               </li>
                                  <li class="nav-item">
                                <a class="nav-link" href="#services"style="font-size:20px;font-family: 'Signika', sans-serif;">Services</a>
                                  </li>
                                    <li class="nav-item">
                             <a class="nav-link" href="#doctors"style="font-size:20px;font-family: 'Signika', sans-serif;">Doctors</a>
                        </li>
                        <li class="nav-item">
          <a class="nav-link" href="#aboutus"style="font-size:20px;font-family: 'Signika', sans-serif;">About Us</a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="#contact"style="font-size:20px;font-family: 'Signika', sans-serif;">Contact Us</a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="#reach"style="font-size:20px;font-family: 'Signika', sans-serif;">Reach Us</a>
      </li>
      <li class="nav-item" style="font-size:20px;font-family: 'Signika', sans-serif;">
          <a class="nav-link" href="#" >Location</a>
      </li>
      <li class="nav-item" style="font-size:20px;font-family: 'Signika', sans-serif;">
          <a class="nav-link" href="login.php">Admin</a>
      </li>
    </ul>
  </div>
</nav>
<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>

  <div class="carousel-inner">
    <div class="carousel-item active">
      <img style="width:100%;height:auto;"src="bharti1.jpg">
    </div>
    <div class="carousel-item">
      <img style="width:100%;height:auto;"src="bharti8.jpg">
    </div>
    <div class="carousel-item">
      <img style="width:100%;height:auto;"src="bharti5.jpg">
    </div>
  </div>

  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>  
   <div class="container-fluid d-flex pt-4" id="first_container" >
                       <h1 id="fh"style="font-family: 'Cookie', cursive; font-size:80px; ">Welcome to Bharti Dental Clinic</h1>
    </div>
    <div class="container-fluid d-flex pt-1"style="justify-content:center;align-items:center;background-image:linear-gradient(to top,white,#FFFFCC)">
                        <p class="td"style="font-family: 'Signika', sans-serif;font-size:25px;">-----------<span id="ani" style="color:lightseagreen;">X</span>-----------</p>
    </div>

    <div class="container-fluid d-flex pt-4" id="second_container">
                      <h1 id="sh"style="font-family: 'Cookie', cursive; font-size:50px;">"We will go another mile for your smile"</h1>
    </div>
   
<div class="container-fluid d-flex pt-5"style="justify-content:center;align-items:center; background:#f9f9f9;">
          <h1 id="aboutus" style="font-family: 'Signika', sans-serif;font-size:52px">About us</h1>
</div>
<div class="container-fluid d-flex pt-1"style="justify-content:center;align-items:center;margin-bottom:4%;background-image:linear-gradient(to top,white,#FFFFCC)">
          <p class="td"style="font-family: 'Signika', sans-serif;font-size:25px;">-----------<span id="ani" style="color:lightseagreen;">X</span>-----------</p>
</div>
<div class="container-fluid">
  <div class="row" style="background:#f9f9f9;">
    <div class="col-xl-6 pt-2">
      <h1 style="margin-bottom:4%; margin-left:4%;">Welcome to our clinic</h1>
      <p style="font-family:sans-serif;
 margin-left:4%;"><b>Bharti Dental Clinic</b> was estabilished on 2012 by Doctor Priya Bharti. Our moto is to see you with a sweet smile and healty teeths. Have any kind of problem with your teeths or mouth,feel free to contact us anytime offline or online. Our experienced doctors will help you out for sure.<br/>With a clinical experience of more than 8 years our clinic makes sure of the betterment of your teeth's health.<br/>
      <ul>
      <li>Experienced Doctors</li>
      <li>Friendly nurses</li>
      <li>Clean and hygienic clinic</li>
      <li>Easily accessible location</li>
      <li>Modern technology</li>
      </ul>
    </div>
    <div class="col-xl-6 d-flex " style="justify-content:center;align-item:center;">
    <img id="about" style="width:500px;height:350px;max-width:100%;border:2px solid #00FA9A;"src="bharti6.jpg">
  </div>
  </div>
</div>
<div id="services"class="container-fluid d-flex pt-5"style="justify-content:center;align-items:center;margin-top:4%;">
          <h1 id="aboutus" style="font-family: 'Signika', sans-serif;font-size:52px;">Services</h1>
</div>
<div class="container-fluid d-flex pt-1"style="justify-content:center;align-items:center;margin-bottom:4%;background-image:linear-gradient(to top,white,#FFFFCC)">
          <p class="td"style="font-family: 'Signika', sans-serif;font-size:25px;">-----------<span id="ani" style="color:lightseagreen;">X</span>-----------</p>
</div>
<div class="container-fluid d-flex"style="justify-content:center;align-items:center">
<div class="cont">
      <p class="box" style="text-align:center;padding-top:40px;font-family: 'Handlee', cursive;font-size:35px; font-weight:1000;background-image:url('invisible.jpg')">Invisible Braces</p>
        <p class="box" style="text-align:center;padding-top:40px;font-family: 'Handlee', cursive;font-size:35px;font-weight:800;background-image:url('services/teethimplant.jpg')">Teeth Implants</p>
          <p class="box" style="text-align:center;padding-top:40px;font-family: 'Handlee', cursive;font-size:35px;font-weight:800;background-image:url('services/gumsurgeries.jpg')">Gum surgeries</p>
              <p class="box" style="text-align:center;padding-top:40px;font-family: 'Handlee', cursive;font-size:35px;font-weight:800;background-image:url('services/dentures.jpg')">Dentures</p>
                <p class="box" style="text-align:center;padding-top:30px;font-family: 'Handlee', cursive;font-size:35px;font-weight:800;background-image:url('services/orthodontics.jpeg')">Orthodontics</p>
                  <p class="box" style="text-align:center;padding-top:40px;font-family: 'Handlee', cursive;font-size:35px;font-weight:800;background-image:url('services/toothjewellary.jpg')">Tooth Jewellary</p>
                     <p class="box" style="text-align:center;padding-top:40px;font-family: 'Handlee', cursive;font-size:35px;font-weight:800;background-image:url('services/full-mouth-rehabilitation.jpeg')">Full mouth<br/>Rehabilitation</p>
                        <p class="box" style="text-align:center;padding-top:40px;font-family: 'Handlee', cursive;font-size:35px;font-weight:800;background-image:url('services/crownsandbridge.png')">Crowns and Bridge</p>
                           <p class="box" style="text-align:center;padding-top:40px;font-family: 'Handlee', cursive;font-size:35px;font-weight:800;background-image:url('services/scaling.jpg')">Scaling and Polishing</p>
                              <p class="box" style="text-align:center;padding-top:40px;font-family: 'Handlee', cursive;font-size:35px;font-weight:800;background-image:url('services/teeth-whitening.jpg')">Teeth Whitening</p>
                                  <p class="box" style="text-align:center;padding-top:40px;font-family: 'Handlee', cursive;font-size:35px;font-weight:800;background-image:url('services/whitefilling.jpg')">Cosmetic Fillings</p>
                                    <p class="box" style="text-align:center;padding-top:40px;font-family: 'Handlee', cursive;font-size:35px;font-weight:800;background-image:url('services/dentalveeners.jpg')">Dental Veneers</p>
                                      <p class="box" style="text-align:center;padding-top:40px;font-family: 'Handlee', cursive;font-size:35px;font-weight:800;background-image:url('services/rct.jpg')">Root Canal<br>treatment(RCT)</p>
                                        <p class="box" style="text-align:center;padding-top:40px;font-family: 'Handlee', cursive;font-size:35px;font-weight:800;background-image:url('services/smiledesign.jpg')">Smile Designing</p>
    </div>
</div>
<div class="container d-flex pt-3" style="justify-content:center;align-items:center;margin-top:2%;">
    <button id="btn1"class="btn"  style="color:black;margin-right:1%;background-image:linear-gradient(#D0D0D0,white);"><</button>
<button id="btn2"class="btn"  style="color:black;margin-left:1%;background-image:linear-gradient(#D0D0D0,white);">></button>
</div>
<div id="services"class="container-fluid d-flex pt-5"style="justify-content:center;align-items:center;margin-top:4%;">
          <h1 id="appointments" style="font-family: 'Signika', sans-serif;font-size:52px;">Appointments</h1>
</div>
<div class="container-fluid d-flex pt-1"style="justify-content:center;align-items:center;margin-bottom:4%;background-image:linear-gradient(to top,white,#FFFFCC)">
          <p class="td"style="font-family: 'Signika', sans-serif;font-size:25px;">-----------<span id="ani" style="color:lightseagreen;">X</span>-----------</p>
</div>
<div class="container-fluid">
<div class="row">
  <div class="col-lg-6" id="app_row">
      <p id="app">Why appointment with us</p>
      <br/>
      <br/>
      <p id="app_para">24/7 Hours Available</p>
      <p>Our stafs are available to help with your difficulties everytime.<br/>Feel free to call us anytime online or offline.</p>
      <p id="app_para">Experienced Staff Available</p>
      <p>Highly experienced doctors and staffs are available which are ready to serve you.<br/>Our doctors are highly experienced and they will make you feel better.</p>
      <p id="app_para">Low price and fees</p>
      <p>Our prices are always less then the market price<br/>We are always ready to help you.</p>
</div>
<div class="col-lg-6">
  <p id="app">Book an appointment</p>
  <form action="" method="POST">
    <label id="lable">Enter your name:</label><br/>
  <input id="input" type="text" name="name" placeholder="Name" required><p style="color:red">
<?php 
if(isset($_POST['submit'])){

if(isset($msg1)) {
echo $msg1;
}
}?></p>
  <label id="lable">Enter your number:</label><br/>
  <input id="input" type="number" name="number"placeholder="Phone number"required/><br/>
  <p style="color:red">
<?php 
if(isset($_POST['submit'])){
if(isset($phnerr)) {
   echo $phnerr;

}
}?></p>
   <label id="lable">Enter your email address:</label><br/>
  <input id="input"type="text" name="email" placeholder="Email"required/><br/><p style="color:red">
<?php 
if(isset($_POST['submit'])){
if(isset($emailErr)) {
echo $emailErr;
}
}?></p>
   <label id="lable">Enter your preferred Date:</label><br/>
  <input id="input"type="text" name="date"placeholder="dd/mm/yy"required/><br/>
  <lable id="lable">Enter your preferred timing:</label><br/><br/>
  <select id="input"name="time"required>
  <option value="10:00-12:00">10:00-12:00</option>
  <option value="12:00-1:00">12:00-1:00</option>
  <option value="3:00-6:00">3:00-6:00</option>
  <option value="6:00-8:00">6:00-8:00</option>
</select><br/><br/>
<input id="btn"type="submit" name="submit" value="Confirm"/>
<p style="color:green">
<?php
ob_start();
session_start();
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "tanya";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$_SESSION['n'] = $conn->real_escape_string($name);
$_SESSION['p'] = $conn->real_escape_string($number);
$SESSION['e'] = $conn->real_escape_string($email);
$_SESSION['d'] = $conn->real_escape_string($date);
$_SESSION['t'] = $conn->real_escape_string($time);
if($i!=0){
 $stmt = $conn->prepare("INSERT INTO patient (name, phone,email,date,time) VALUES (?, ?, ?, ? ,?)");
$stmt->bind_param("sisss", $_SESSION['n'], $_SESSION['p'], $SESSION['e'],$_SESSION['d'],$_SESSION['t']);
if($stmt->execute()){
  echo "Booked your appointment successfully.We will respond you soon.";
  echo "<script type='text/javascript'>alert('Booking confirmed')</script>";
  unset($_SESSION["n"]);
  unset($_SESSION["p"]);
  unset($_SESSION["e"]);
  unset($_SESSION["d"]);
  unset($_SESSION["t"]);
  session_start();
  session_destroy();
}
else{
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
?></p>
</form>
</div>
</div>
</div>
<div id="services"class="container-fluid d-flex pt-5"style="justify-content:center;align-items:center;margin-top:4%;">
          <h1 id="appointments" style="font-family: 'Signika', sans-serif;font-size:52px;">Gallery</h1>
</div>
<div class="container-fluid d-flex pt-1"style="justify-content:center;align-items:center;margin-bottom:4%;background-image:linear-gradient(to top,white,#FFFFCC)">
          <p class="td"style="font-family: 'Signika', sans-serif;font-size:25px;">-----------<span id="ani" style="color:lightseagreen;">X</span>-----------</p>
</div>
<div class="container">
<div class="row ">
  <div class="col-lg-4 col-md-4 col-sm-4 col-12">
          <img class="img-fluid"src = "pic2.jpg"style="width:300px;height:auto;margin-left:3%">
</div>
 <div class="col-lg-4 col-md-4 col-sm-4 col-12">
     <img class="img-fluid"src = "pic1.jpg"style="width:300px;height:auto;margin-left:3%">
</div>
 <div class="col-lg-4 col-md-4 col-sm-4 col-12">
     <img class="img-fluid"src = "pic2.jpg"style="width:300px;heightauto;margin-left:3%">
</div>
</div>
</div>
<br/>
<div class="container">
<div class="row">
  <div class="col-lg-4 col-md-4 col-sm-4 col-12">
          <img class="img-fluid"src = "pic2.jpg"style="width:300px;height:auto;margin-left:3%;margin-bottoom:5%;">
</div>
 <div class="col-lg-4 col-md-4 col-sm-4 col-12">
     <img class="img-fluid"src = "pic1.jpg"style="width:300px;height:auto;margin-left:3%;margin-bottoom:5%;">
</div>
 <div class="col-lg-4 col-md-4 col-sm-4 col-12">
     <img class="img-fluid"src = "pic3.jpg"style="width:300px;heightauto;margin-left:3%;margin-bottoom:5%;">
</div>
</div>
</div>
<div id="doctors"class="container-fluid d-flex pt-5"style="justify-content:center;align-items:center;margin-top:4%;">
          <h1 id="appointments" style="font-family: 'Signika', sans-serif;font-size:52px;">Doctors</h1>
</div>
<div class="container-fluid d-flex pt-1"style="justify-content:center;align-items:center;margin-bottom:4%;background-image:linear-gradient(to top,white,#FFFFCC)">
          <p class="td"style="font-family: 'Signika', sans-serif;font-size:25px;">-----------<span id="ani" style="color:lightseagreen;">X</span>-----------</p>
</div>
<div class="container-fluid d-flex pt-3" style="justify-content:center;align-items:center;background-image:linear-gradient(#E8E8E8,rgba(245,245,245,0.4));">
<div class="card-deck">
<div class="card" style="width:350px;height:500px;">
    <img class="card-img-top" src="bharti10.jpg" alt="Card image"style="width:100%;height:60%;">
    <div class="card-body">
      <h4 class="card-title">Dr. Priya Bharti</h4>
      <p class="card-text">Founder of BHARTI DENTAL CLINIC and has an experience of more than 8 years and she is very friendly and kind.</p>
    </div>
  </div>
  <div class="card" style="width:350px">
    <img class="card-img-top" src="bharti11.jpg" alt="Card image" style="width:100%;height:60%;">
    <div class="card-body">
      <h4 class="card-title">Dr. Saakshi Kumari</h4>
      <p class="card-text">She has done her B.D.S from Awadh Dental College and is very kind and helpful.</p>
    </div>
  </div>
</div>
</div>
<br/>
<br/>
<br/>
<br/>
<div class="container-fluid" >
<div class="row">
  <div class="col-lg-6 col-12">
    <img src= "bharti9.jpg" class="img-fluid rounded" style="width:80%;height:auto;border:2px solid skyblue;margin-left:10%;">
  </div>  
  <div class="col-lg-6 col-12">
    <p id="app"style="margin-left:2%;">Doctor Bharti</p>
    <ul>
      <li>skigu siugho iuho giuhfoi guhdfr thertbertbertbert etbhert etrbrtbert</li>
      <li>skigu siugho iuho giuhfoi guhdfr thertbertbertbert etbhert etrbrtbert</li>
      <li>skigu siugho iuho giuhfoi guhdfr thertbertbertbert etbhert etrbrtbert</li>
      <li>skigu siugho iuho giuhfoi guhdfr thertbertbertbert etbhert etrbrtbert</li>
      <li>skigu siugho iuho giuhfoi guhdfr thertbertbertbert etbhert etrbrtbert</li>
      <li>skigu siugho iuho giuhfoi guhdfr thertbertbertbert etbhert etrbrtbert</li>
      <li>skigu siugho iuho giuhfoi guhdfr thertbertbertbert etbhert etrbrtbert</li>
      <li>skigu siugho iuho giuhfoi guhdfr thertbertbertbert etbhert etrbrtbert</li>
      <li>skigu siugho iuho giuhfoi guhdfr thertbertbertbert etbhert etrbrtbert</li>
    </ul>
  </div>  
</div>
</div>
<div id="doctors"class="container-fluid d-flex pt-5"style="justify-content:center;align-items:center;margin-top:2%;">
          <h1 id="contact" style="font-family: 'Signika', sans-serif;font-size:52px;">Contact Us</h1>
</div>
<div class="container-fluid d-flex pt-1"style="justify-content:center;align-items:center;margin-bottom:4%;background-image:linear-gradient(to top,white,#FFFFCC)">
          <p class="td"style="font-family: 'Signika', sans-serif;font-size:25px;">-----------<span id="ani" style="color:lightseagreen;">X</span>-----------</p>
</div>
<div class='container-fluid'>
<form action="messege.php" method="POST">
      <div class="row">
        <div class="col-lg-6 col-12">
            <input class="inp" name="name2"type="text" placeholder="Enter your name" required>
      </div>
      <div class='col-lg-6 col-12'>
            <input class="inp"type="text" placeholder="Enter your email" name="email2" required>
</div>
</div>
<br/>
      <div class="row">
        <div class="col-12">
<input class="inp1"type="text" placeholder="Phone number" name="phone2" required>
</div>
</div>
<br/>
<div class="row">
  <div class="col-12">
<input class="inp2"type="text" placeholder="Enter your messese here" name="messege2"required>
</div>
</div>
<br/>
<div class="row">
  <div class="col-lg-6">
  <button class="inp"type="submit" name="submit1" style="width:20%;outline:none;">Send</button>
</div>
</div>
</form>
        <?php include 'messege.php';?>

</div>
<div id="doctors"class="container-fluid d-flex pt-5"style="justify-content:center;align-items:center;margin-top:4%;">
          <h1 id="reach" style="font-family: 'Signika', sans-serif;font-size:52px;">Reach Us</h1>
</div>
<div class="container-fluid d-flex pt-1"style="justify-content:center;align-items:center;margin-bottom:4%;background-image:linear-gradient(to top,white,#FFFFCC)">
          <p class="td"style="font-family: 'Signika', sans-serif;font-size:25px;">-----------<span id="ani" style="color:lightseagreen;">X</span>-----------</p>
</div>
<div class="contianer-fluid" style="background-image:linear-gradient(#FFFFCC,white);background-repeat:no-repeat;">
  <div class="row">
    <div class="col-lg-6 col-12">
      <h2 style="margin-left:10%;padding-top:20px;font-family: 'Signika', sans-serif;">Address</h1><br/>
      <p style="margin-left:11%;">Tota bari road hello world <br/>iuhr phr piuhp oqhipoiqhpoiwh.</p>
</div>
  <div class="col-lg-6 col-12">
    <h2 style="margin-left:10%;padding-top:20px;font-family: 'Signika', sans-serif;">Phone Number</h1><br/>
      <p style="margin-left:11%;">Tota bari road hello world <br/>iuhr phr piuhp oqhipoiqhpoiwh.</p>
</div>
</div>
</div>
<br/>
<br/>
<br/><div class="container-fluid d-flex pt-1"style="justify-content:center;align-items:center;margin-bottom:4%;background-image:linear-gradient(to top,white,#FFFFCC)">
          <p class="td"style="font-family: 'Signika', sans-serif;font-size:25px;">-----------<span id="ani" style="color:lightseagreen;">X</span>-----------</p>
</div>
<div class="container-fluid d-flex pt-3"style="justify-content:center;align-items:center;background:rgba(130,209,198,0.1);">
  <h3 >Powered by <p style="font-size:45px;color:green;font-family: 'Satisfy', cursive;">Bharti Dental Clinic</p></h3>
  <br/>
</div>
<br/>
<br/>
<br/>
<div class="container-fluid d-flex pt-1"style="justify-content:center;align-items:center;margin-bottom:4%;background-image:linear-gradient(to top,white,#FFFFCC)">
          <p class="td"style="font-family: 'Signika', sans-serif;font-size:25px;">-----------<span id="ani" style="color:lightseagreen;">X</span>-----------</p>
</div>
<div class="container-fluid d-flex pt-3"style="justify-content:center;align-items:center;background:rgba(130,209,198,0.1);">
  <h4>Developed by<p style="font-size:30px;color:green;font-family: 'Satisfy', cursive;">Aaditya Pal</p></h3>
  <br/>
</div>

</body>
</html>
<script>
var i = 1;
function always() {
    switch (i) {
        case 1: document.getElementById("about").src = "bharti6.jpg";
            break;
        case 2: document.getElementById("about").src = "bharti2.jpg";
            break;
        case 3: document.getElementById("about").src = "bharti3.jpg";
            break;
    }
    window.i = window.i + 1;
    if (window.i > 3) {
        window.i = 1;
    }
}
setInterval(always,2000);
  $("document").ready(function(){
    $("#btn2").click(function(){
        $('.cont').animate({scrollLeft:"+=260px"},"fast");
    });
     $("#btn1").click(function(){
        $('.cont').animate({scrollLeft:"-=260px"},"fast");
    });
  });
</script>


