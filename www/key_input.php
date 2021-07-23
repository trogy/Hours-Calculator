<?php session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Hours Calculator</title>
<script src="JS/pace.min.js"></script>
<link rel="stylesheet" href="CSS/pace-theme-material.css">
<style>
.pace-running > *:not(.pace) {
  opacity:0;
}
</style>
<link rel="stylesheet" href="CSS/form.css">
<link rel="stylesheet" href="CSS/bootstrap.min.css">
<link rel="stylesheet" href="CSS/animate.min.css">
<script src="JS/jquery.min.js"></script>
<script src="JS/popper.min.js"></script>
<script src="JS/bootstrap.min.js"></script>
</head>
<body>
  <div class="logo animate__animated animate__fadeInDown animate__delay-1s">
    <img src="logo.png" width=350>
  </div>
  <div class="logo-text animate__animated animate__fadeInDown animate__delay-1s">
    <h5> Trogy.NZ Hours Calculator </h5>
  </div>
  <div class='Welcome_Text animate__animated animate__delay-1s animate__backInDown'>
    <h1> Authorisation Required!</h1>
    <hr>
    <h5 class="animate__animated animate__delay-2s animate__fadeIn"> Enter a valid SendGrid API Key </h5>
  </div>
            <form class="form-signin" id="form" action="key_write.php" method="POST">
            <div class="Flex-Container animate__animated animate__delay-1s animate__backInUp" id="Flex-Container">
            <div class="Flex-Item">
              <p> Key &nbsp; </p>
              <div class="form-label-group">
                <input type="password" name="API_KEY" id="API_KEY" class="form-control" required>
              </div>
            </div>
            <div class="Flex-Item">
              <p> Sender Email &nbsp; </p>
              <div class="form-label-group">
                <input type="email" name="SND_EMAIL" id="SND_EMAIL" class="form-control" required>
              </div>
            </div>
            </div>
            </div>
              <br>
              <button class="btn btn-lg btn-dark btn-block text-uppercase animate__animated animate__delay-2s animate__fadeIn" id="Submit_BTN" type="submit">Submit</button>
              <br>
            </form>
            <div class="Footer animate__animated animate__delay-1s animate__backInUp">
              <p> Trogy.NZ Hours Calculator © Marc Anderson [Trogy.NZ] <?php echo date("Y"); ?> | This is BETA software bugs may occur.</p>
              <hr>
              <p> See more cool stuff at Trogy.NZ </p>
            </div>

</body>
</html>
