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
      <div class="container">
          <center>
          <form action="form.php" method="POST">
              <h2>signup</h2>
           <input type="text" name="username" class="username" placeholder="Username" required><br><br>
           <input type="email" name="email" class="email" placeholder="Email" required><br><br>
           <input type="password" name="password" class="password" placeholder="Password" required><br><br>
           <input type="password" name="repassword" class="password" placeholder="Password Confirmation" required><br><br>
           <?php
           if(isset($_GET["msg"])&&$_GET["msg"]=='usernamefailed'){
            echo "<center style='color :red'>Username already taken</center>";
           }
           else  if(isset($_GET["msg"])&&$_GET["msg"]=='passwordsfailed'){
            echo "<center style='color :red'>Passwords not matched</center>";
           }
           else  if(isset($_GET["msg"])&&$_GET["msg"]=='success'){
            echo "<center style='color :green'>Your account has created successfully! Go to login page</center>";
           }?>
       
           <a href="login.php">Sign in instead</a><br><br>
           <button class="btn btn-dark">Signup</button>
          </form>
          </center>
      </div>
    
</body>
</html>