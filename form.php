<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Management</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">EM</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-link active" aria-current="page" href="home.html">Home</a>
              <a class="nav-link" href="#">About Us</a>
            </div>
          </div>
        </div>
      </nav>
</body>
</html>
<?php 
$servername="localhost";
$username="root";
$password="charan123";
$dbname="useraccounts";
$conn=mysqli_connect($servername,$username,$password,$dbname);
$usr=$_POST['username'];
$email=$_POST['email'];
$pwd=$_POST['password'];
$repwd=$_POST['repassword'];
if($pwd==$repwd){
$sql ="INSERT INTO users(username,password) 
VALUES ('$usr','$pwd')";
   if (mysqli_query($conn, $sql)) {
    header("location:signup.php?msg=success");
  } else {
    header("location:signup.php?msg=usernamefailed");
  }
  }
  else{
    header("location:signup.php?msg=passwordsfailed");
  }
  mysqli_close($conn);
?>

