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
<script src="JS/jquery.min.js"></script>
<script src="JS/popper.min.js"></script>
<script src="JS/bootstrap.min.js"></script>
</head>
<body>
  <div class="logo">
    <img src="https://trogy.nz/wp-content/uploads/2021/03/Trogy.NZDARK.png" width=350>
  </div>
  <div class="logo-text">
    <h5> Trogy.NZ Hours Calculator </h5>
  </div>
        <div class="card-signin">
          <div class="card-body">
           <h5 class="card-title text-center">Hours Calculator</h5>
            <form class="form-signin" action="Calculator.php" method="POST">
              <p> Monday </p>
              <div class="form-label-group">
                <input type="datetime-local" name="D1_Start" id="D1_Start" class="form-control" required>
              </div>
              <div class="form-label-group">
                <input type="datetime-local" name="D1_End" id="D1_End" class="form-control" required>
              </div>
              <hr>
              <p> Tuesday </p>
              <div class="form-label-group">
                <input type="datetime-local" name="D2_Start" id="D2_Start" class="form-control" required>
              </div>
              <div class="form-label-group">
                <input type="datetime-local" name="D2_End" id="D2_End" class="form-control" required>
              </div>
              <hr>
              <p> Wednesday </p>
              <div class="form-label-group">
                <input type="datetime-local" name="D3_Start" id="D3_Start" class="form-control" required>
              </div>
              <div class="form-label-group">
                <input type="datetime-local" name="D3_End" id="D3_End" class="form-control" required>
              </div>
              <hr>
              <p> Thursday </p>
              <div class="form-label-group">
                <input type="datetime-local" name="D4_Start" id="D4_Start" class="form-control" required>
              </div>
              <div class="form-label-group">
                <input type="datetime-local" name="D4_End" id="D4_End" class="form-control" required>
              </div>
              <hr>
              <p> Friday </p>
              <div class="form-label-group">
                <input type="datetime-local" name="D5_Start" id="D5_Start" class="form-control" required>
              </div>
              <div class="form-label-group">
                <input type="datetime-local" name="D5_End" id="D5_End" class="form-control" required>
              </div>
            </div>
              <hr>
              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Submit</button>
              <br>
            </form>
          </div>
      </div>
</body>
</html>
