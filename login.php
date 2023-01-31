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
      <div class="collapse" id="collapseExample">
        <div class="card card-body">
          This website allow you to manage events <br><br>
          <span>Developed by <a href="https://github.com/charan1045">@charan</a></span>
        </div>
      </div>
      <div class="container">
          <center>
          <form autocomplete="off" action="event.php" method="POST" class="login">
              <h2>Login</h2>
           <input type="text" name="username" class="username" placeholder="Username or Email" required><br><br>
           <input id="password-field" type="password" name="password" class="password" placeholder="Password" required><br><br>
           <?php
if (isset($_GET["msg"]) && $_GET["msg"] == 'failed') {
  echo "<center style='color :red'>Wrong Username / Password</center>";
  }
  ?>

           <a href="signup.php">Create account</a><br><br>
           <button class="btn btn-dark">Login</button>
          </form>
          </center>
      </div>
    <script>
      let flag=0;
      let nax=document.getElementsByClassName("nav-link")[1];
      let fax=document.getElementById("collapseExample");
      nax.addEventListener("click",()=>{
        if(flag==1){
    fax.classList.remove("collapse.show");
    fax.classList.add("collapse");
    flag=0;
}
    else{
        fax.classList.remove("collapse");
      fax.classList.add("collapse.show");
        flag=1;
    }
        
      });
    </script>
</body>
</html>
