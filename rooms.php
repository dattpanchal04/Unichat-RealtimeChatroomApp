<?php

// Get Parameters
$roomname = $_GET['roomname'];

// Connecting to the database
include 'db_connect.php';

// Execute sql to check wheather room exists
$sql = "SELECT * FROM `rooms` WHERE roomname = '$roomname'";

$result = mysqli_query($conn, $sql);
if($result)
{
	// Check if room exists
	if(mysqli_num_rows($result) == 0)
	{
		$msg = "This room does not exists! Try creating new one";
		echo '<script language="javascript">';
		echo 'alert("'.$msg.'");';
		echo 'window.location="http://localhost/Realtime_Chatroom/";';
		echo '</script>';
	}
}	
else
{
	echo "Error: ". mysqli_error($conn);
}

// echo "Let's chat";

?>

<!-- Page Code -->
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>UniChat - A Chatroom</title>
    <link rel="apple-touch-icon" href="/docs/5.1/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/5.1/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/5.1/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
    <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon.ico">
    <link rel="icon" href="img/favicon.png">
    <meta name="theme-color" content="#7952b3">

  </head>
<style>

body{
  background-color: #082032;
}
.box {
  border: 2px solid #082032;
  background-color: #f1f1f1;
  border-radius: 5px;
  padding: 10px;
  margin: 10px 0;
}

.darker {
  border-color: #ccc;
  background-color: #ddd;
}

.box::after {
  content: "";
  clear: both;
  display: table;
}

.box img {
  float: left;
  max-width: 60px;
  width: 100%;
  margin-right: 20px;
  border-radius: 50%;
}

.box img.right {
  float: right;
  margin-left: 20px;
  margin-right:0;
}

.time-right {
  float: right;
  color: #aaa;
}

.time-left {
  float: left;
  color: #999;
}
.anyclass{
  height: 350px;
  overflow-y: scroll;
}
</style>
<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">UniChat</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://github.com/dattpanchal04">GitHub</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.html">About</a>
          </li>

      </div>
    </div>
  </nav>

 <div class="container my-5">
    <h2 style="color: white; font-weight: bold; font-family: inherit; font-size: 21px">Your Chat Room - <?php echo $roomname; ?></h2>

    <div class="box my-3">
      <div class="anyclass">
        <div class="alert alert-warning" role="alert">
          No meassage here yet.. Let's chat now!
        </div>
      </div>

    <div class="input-group mb-3">
        <input type="text" class="form-control" id="usermsg" placeholder="Add Meassage" aria-label="msg"><br>
    </div>
     <button type="button" id="subbtn" class="btn btn-primary">Send</button>
 </div>
        
    <!-- Footer -->
  <div class="container">
    <footer class="py-3 my-4">
      <ul class="nav justify-content-center border-bottom pb-3 mb-3">
        <li class="nav-item active"><a href="index.php" class="nav-link px-2 text-light">Home</a></li>
        <li class="nav-item"><a href="https://github.com/dattpanchal04" class="nav-link px-2 text-light">GitHub</a></li>
        <li class="nav-item"><a href="https://codies.surge.sh/" class="nav-link px-2 text-light">Our-Website</a></li>
        <li class="nav-item"><a href="about.html" class="nav-link px-2 text-light">About</a></li>
      </ul>
      <p class="text-center text-light">© 2021 UniChat</p>
    </footer>
  </div>

      <!-- Optional JavaScript; choose one of the two! -->

      <!-- Option 1: Bootstrap Bundle with Popper -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

      <!-- Add jquery script -->
      <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

      <!-- My Script, if user submit the form -->
      <script>

        // Check for new meassges every one second
        setInterval(runfunction, 1000);
        function runfunction()
        {
          $.post("htcont.php", {room:'<?php echo $roomname; ?>'},
            function(data, status)
            {
              document.getElementsByClassName('anyclass')[0].innerHTML = data;
            
            }
            )
        }

        // Press enter key to send a meassage
        var input = document.getElementById("usermsg");
        input.addEventListener("keyup", function(event) {
          if (event.keyCode === 13) {
           event.preventDefault();
           document.getElementById("subbtn").click();
          }
        });

        // Press button to send a meassage in database
        $("#subbtn").click(function(){
          var clientmsg = $('#usermsg').val();
        $.post("postmsg.php", {text: clientmsg, room:'<?php echo $roomname; ?>', ip:'<?php echo $_SERVER['REMOTE_ADDR']; ?>'},
        function(data, status){
          document.getElementsByClassName('anyclass')[0].innerHTML = data;});
        $('#usermsg').val(""); // After enter or press button the msg will be invisible
        return false;

      });

      </script>

      <!-- Option 2: Separate Popper and Bootstrap JS -->
      <!--
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
      -->
 </body>
</html>