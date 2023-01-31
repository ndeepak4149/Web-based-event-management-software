
  <?php session_start();
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
          <a class="navbar-brand" href="#"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
            <!--  <a class="nav-link active" aria-current="page" href="#">Home</a>
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
        echo "<h2>Welcome " . $_SESSION['username'] . "!</h2>";
      }
      else{
        echo "<h1 style='background-color:blue'>Please Login Again</h1>";
      }
      ?>
          <form autocomplete="off" action="success.php" method="POST" class="form">
            <h2 class="create">Create event</h2>
    <div class="event">
          <label for="purpose">Event Purpose:</label><br>
          <textarea name="purpose" id="event" cols="23" rows="3"></textarea><br>
          <label for="date">Select date:</label><br>
          <input type="text" id="datepicker" name="date"><br><br>
          <button class="btn btn-primary">Create</button>
    </div>
          </form>
      </center>
      <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.11/jquery-ui.min.js"></script>
<script>
  $(".create").click(function(){
    $(".event").toggle();
  });
</script>
</body>
</html>
<?php
$servername="localhost";
$username="root";
$password="charan123";
$dbname="useraccounts";
$conn=mysqli_connect($servername,$username,$password,$dbname);
$sql="SELECT date FROM event";
$nax = array_fill(0, $size_of_the_array, $some_data);
$result=mysqli_query($conn,$sql);
$size=mysqli_num_rows($result);
$nax = array_fill(0,$size,"");
if (mysqli_num_rows($result) > 0) {
  $i=0;
  while($row = mysqli_fetch_assoc($result)) {
    $nax[$i]=$row['date'];
    $i=$i+1;
  }}
  ?>
  <script>
  var disabledDates = <?php echo json_encode($nax); ?>;
    $( "#datepicker" ).datepicker({
      dateFormat: "yy-mm-dd",
    beforeShowDay: function(date){
        var string = jQuery.datepicker.formatDate('yy-mm-dd', date);
        return [ disabledDates.indexOf(string) == -1 ]
    }
});

 </script>
  
