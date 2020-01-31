<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed&display=swap" rel="stylesheet">

    <script type="text/javascript">
    window.history.forward();
    function noBack(){ 
    window.history.forward();
     }
</script>   
<script>
 $(document).ready(function() {
            noBack();
}); 
</script>
    <title>Document</title>
</head>
<body>
<div class="container-fluid pt-3" style="background-image:linear-gradient(to bottom,#00B000	,white);">
<p class="text-center display-3"style="color:white;font-family: 'Roboto Condensed', sans-serif;">List of patients</p>
<a href="logout.php"><button class="btn-lg bg-success"style="color:white;margin-left:45%;">Log Out</button></a>
</div>
</div>
<br/>
<br/>
<div class="container-fluid">
<table class="table table-striped">
 <thead>
      <tr>
      <th>ID</th>
        <th>NAME</th>
        <th>PHONE NUMBER</th>
        <th>EMAIL</th>
        <th>DATE</th>
        <th>TIME</th>
      </tr>
    </thead>
<?php
  $username="root";
  $password="root";
  $servername="localhost";
  $dbname = "tanya";
  $connc = new mysqli($servername,$username,$password,$dbname);
  $sql = "SELECT id,name,phone,email,date,time FROM patient";
  $result = $connc->query($sql);
    if($result->num_rows > 0)
    {
    while($row = $result->fetch_assoc()){
        echo "<tr>";
        echo "<td>".$row["id"]."</td>";
         echo "<td>".$row["name"]."</td>";
        echo "<td>".$row["phone"]."</td>";
        echo "<td>".$row["email"]."</td>";
          echo "<td>".$row["date"]."</td>";
         echo "<td>".$row["time"]."</td>";
        echo "</tr>";
    }
    }
?>
</table>
</div>
</body>
</html>

