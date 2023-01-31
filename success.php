
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Management</title>
    <style>
      .nav{
        margin-left:auto;
        color:red;
      }
    </style>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
        <?php
        if(isset($_SESSION['loggedin'])&&$_SESSION['loggedin']==true){
        echo "<a class='navbar-brand' href='#'>".$_SESSION['username']."</a>";
      }
      else{
        echo "<h1 style='background-color:blue'>Please Login Again</h1>";
      }?>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
           <!--   <a class="nav-link active" aria-current="page" href="#">Home</a>
              <a class="nav-link" href="#">About Us</a>-->
            </div>
            <div class="nav">
              <a href="login.php">Logout</a>
            </div>
          </div>
        </div>
      </nav>
      <center>
      <?php session_start();
      if(isset($_SESSION['loggedin'])&&$_SESSION['loggedin']==true){

      }
      else{
        echo "<h1 style='background-color:blue'>Please Login Again</h1>";
      }
      ?>
      </center>
      <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.11/jquery-ui.min.js"></script>
</body>
</html>
<?php
$servername="localhost";
$username="root";
$password="charan123";
$dbname="useraccounts";
$conn=mysqli_connect($servername,$username,$password,$dbname);
  if(isset($_POST['date'])){
$date=$_POST['date'];
$usr=$_SESSION['username'];
$sql1="INSERT INTO event(username,date) VALUES ('$usr','$date')";
if(mysqli_query($conn,$sql1)){echo "<center><h3>Event Created Successfully</h3></center>";}
else {echo "Error: " . $sql . "<br>" . mysqli_error($conn);}}
?>
<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <center>
        <h4>Event Details :</h4><br>
    <?php session_start();
      if(isset($_SESSION['loggedin'])&&$_SESSION['loggedin']==true){
        echo "<p>Username :" . $_SESSION['username'] . "</p>";
      }
      else{
        echo "<h1 style='background-color:blue'>Please Login Again</h1>";
      }
      echo "<p>EventDate : " . $date . "(yy-mm-dd)</p>";
      ?>
      <button class="btn btn-primary" id="button">Goback</button>
        
    </center>
    <script>
        $("#button").click(function(){
            location.href="home.php";
        });
    </script>
</body>
</html>