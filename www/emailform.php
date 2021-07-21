<?php session_start();
$path_to_file = 'key.php';
if (!file_exists($path_to_file)) {
	header('Location: key_input.php');
}
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
    <h1> We Need A Little More Info. </h1>
    <hr>
    <h5 class="animate__animated animate__delay-2s animate__fadeIn"> Fill out your details below and hit send. </h5>
  </div>
            <form class="form-signin" id="form" action="email_loader.php" method="POST">
            <div class="Flex-Container animate__animated animate__delay-1s animate__backInUp" id="Flex-Container">
              <p> Company Name &nbsp; </p>
              <div class="form-label-group">
                <input type="Text" name="Com-Name" id="Com-Name" class="form-control" required>
              </div>
              <p> &nbsp; Your Name &nbsp; </p>
              <div class="form-label-group">
                <input type="Text" name="Name" id="Name" class="form-control" required>
              </div>
              <p> &nbsp; Your Email &nbsp; </p>
              <div class="form-label-group">
                <input type="email" name="Email" id="Email" class="form-control" required>
              </div>
              <p> &nbsp; SendGrid Sender Email &nbsp; </p>
              <div class="form-label-group">
                <input type="email" name="SG-Email" id="SG-Email" class="form-control" required>
              </div>
              <p> &nbsp; Recipents Name &nbsp; </p>
              <div class="form-label-group">
                <input type="Text" name="Rec-Name" id="Rec-Name" class="form-control" required>
              </div>
              <p> &nbsp; Recipents Email &nbsp; </p>
              <div class="form-label-group">
                <input type="email" name="Rec-Email" id="Rec-Email" class="form-control" required>
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
