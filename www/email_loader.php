<?php
session_start();

$_SESSION['EMAIL'] = $_POST['Email'];
$_SESSION['NAME'] = $_POST['Name'];
$_SESSION['REC_EMAIL'] = $_POST['Rec-Email'];
$_SESSION['REC_NAME'] = $_POST['Rec-Name'];
$_SESSION['CO_NAME'] = $_POST['Com-Name'];
$_SESSION['SG_EMAIL'] = $_POST['SG-Email'];



 ?>



<style>
.lds-grid {
  display: inline-block;
  position: relative;
  width: 80px;
  height: 80px;
}
.lds-grid div {
  position: absolute;
  width: 16px;
  height: 16px;
  border-radius: 50%;
  background: #fff;
  animation: lds-grid 1.2s linear infinite;
}
.lds-grid div:nth-child(1) {
  top: 8px;
  left: 8px;
  animation-delay: 0s;
}
.lds-grid div:nth-child(2) {
  top: 8px;
  left: 32px;
  animation-delay: -0.4s;
}
.lds-grid div:nth-child(3) {
  top: 8px;
  left: 56px;
  animation-delay: -0.8s;
}
.lds-grid div:nth-child(4) {
  top: 32px;
  left: 8px;
  animation-delay: -0.4s;
}
.lds-grid div:nth-child(5) {
  top: 32px;
  left: 32px;
  animation-delay: -0.8s;
}
.lds-grid div:nth-child(6) {
  top: 32px;
  left: 56px;
  animation-delay: -1.2s;
}
.lds-grid div:nth-child(7) {
  top: 56px;
  left: 8px;
  animation-delay: -0.8s;
}
.lds-grid div:nth-child(8) {
  top: 56px;
  left: 32px;
  animation-delay: -1.2s;
}
.lds-grid div:nth-child(9) {
  top: 56px;
  left: 56px;
  animation-delay: -1.6s;
}
@keyframes lds-grid {
  0%, 100% {
    opacity: 1;
  }
  50% {
    opacity: 0.5;
  }
}
html{
  background-color: black;
}
.container{
  text-align: center;
  color: white;
}
</style>
<div class="container">
  <br> <br> <br>
<div class="lds-grid"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
<h3> Computing... </h3>
</div>
<meta http-equiv="refresh" content="2;url=sendgridemail.php" />
