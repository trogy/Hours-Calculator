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
    <h1> Welcome to Hours Calculator </h1>
    <hr>
    <h5 class="animate__animated animate__delay-2s animate__fadeIn"> Give us your start and finish times and we'll do the rest. </h5>
  </div>
            <form class="form-signin" id="form" action="Calculator.php" method="POST">
            <div class="Flex-Container animate__animated animate__delay-1s animate__backInUp" id="Flex-Container">
             <div class="Flex-Item">
              <h5> Monday </h5>
              <hr>
              <p> Start Time </p>
              <div class="form-label-group">
                <input type="datetime-local" name="D1_Start" id="D1_Start" class="form-control">
              </div>
              <br>
              <p> Finish Time </p>
              <div class="form-label-group">
                <input type="datetime-local" name="D1_End" id="D1_End" class="form-control">
              </div>
              </div>
              <div class="Flex-Item">
              <h5> Tuesday </h5>
              <hr>
              <p> Start Time </p>
              <div class="form-label-group">
                <input type="datetime-local" name="D2_Start" id="D2_Start" class="form-control">
              </div>
              <br>
              <p> Finish Time </p>
              <div class="form-label-group">
                <input type="datetime-local" name="D2_End" id="D2_End" class="form-control">
              </div>
              </div>
              <div class="Flex-Item">
              <h5> Wednesday </h5>
              <hr>
              <p> Start Time </p>
              <div class="form-label-group">
                <input type="datetime-local" name="D3_Start" id="D3_Start" class="form-control">
              </div>
              <br>
              <p> Finish Time </p>
              <div class="form-label-group">
                <input type="datetime-local" name="D3_End" id="D3_End" class="form-control">
              </div>
              </div>
              <div class="Flex-Item">
              <h5> Thursday </h5>
              <hr>
              <p> Start Time </p>
              <div class="form-label-group">
                <input type="datetime-local" name="D4_Start" id="D4_Start" class="form-control">
              </div>
              <br>
              <p> Finish Time </p>
              <div class="form-label-group">
                <input type="datetime-local" name="D4_End" id="D4_End" class="form-control">
              </div>
              </div>
              <div class="Flex-Item">
              <h5> Friday </h5>
              <hr>
              <p> Start Time </p>
              <div class="form-label-group">
                <input type="datetime-local" name="D5_Start" id="D5_Start" class="form-control">
              </div>
              <br>
              <p> Finish Time </p>
              <div class="form-label-group">
                <input type="datetime-local" name="D5_End" id="D5_End" class="form-control">
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
