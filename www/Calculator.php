<?php
function decimal_to_time($decimal) {
    $hours = floor($decimal % 60);
    $minutes = $decimal - (int)$decimal;
    $minutes = round($minutes * 60);

    return str_pad($hours, 2, "0", STR_PAD_LEFT) . " Hours " . str_pad($minutes, 2, "0", STR_PAD_LEFT) . " Minutes ";
}
//Setup Variables for a 5 day Week
$D1_Start = $_POST['D1_Start'];
$D1_End = $_POST['D1_End'];
$D1_TS_Start = strtotime($D1_Start);
$D1_TS_End = strtotime($D1_End);

$D2_Start = $_POST['D2_Start'];
$D2_End = $_POST['D2_End'];
$D2_TS_Start = strtotime($D2_Start);
$D2_TS_End = strtotime($D2_End);

$D3_Start = $_POST['D3_Start'];
$D3_End = $_POST['D3_End'];
$D3_TS_Start = strtotime($D3_Start);
$D3_TS_End = strtotime($D3_End);

$D4_Start = $_POST['D4_Start'];
$D4_End = $_POST['D4_End'];
$D4_TS_Start = strtotime($D4_Start);
$D4_TS_End = strtotime($D4_End);

$D5_Start = $_POST['D5_Start'];
$D5_End = $_POST['D5_End'];
$D5_TS_Start = strtotime($D5_Start);
$D5_TS_End = strtotime($D5_End);

$SUM_D1 = abs($D1_TS_End - $D1_TS_Start)/(60*60);
$SUM_D2 = abs($D2_TS_End - $D2_TS_Start)/(60*60);
$SUM_D3 = abs($D3_TS_End - $D3_TS_Start)/(60*60);
$SUM_D4 = abs($D4_TS_End - $D4_TS_Start)/(60*60);
$SUM_D5 = abs($D5_TS_End - $D5_TS_Start)/(60*60);

echo"<style>
  html{
    font-family: Arial;
  }
 </style>";
echo "Tip: Copy all text within the lines";
echo "<hr>";
echo "Trogy.NZ Hours Calculator <br>";
echo "Hours From: " . date("d/m", $D1_TS_Start) . " - " . date("d/m", $D5_TS_Start);
echo "<br>";
echo "=====================";
echo "<br>";
echo date("d/m", $D1_TS_Start) . " | " . date('H:i', $D1_TS_Start) . " - " . date('H:i', $D1_TS_End) . " | " . decimal_to_time($SUM_D1);
echo "<br>";
echo date("d/m", $D2_TS_Start) . " | " . date('H:i', $D2_TS_Start) . " - " . date('H:i', $D2_TS_End) . " | " . decimal_to_time($SUM_D2);
echo "<br>";
echo date("d/m", $D3_TS_Start) . " | " . date('H:i', $D3_TS_Start) . " - " . date('H:i', $D3_TS_End) . " | " . decimal_to_time($SUM_D3);
echo "<br>";
echo date("d/m", $D4_TS_Start) . " | " . date('H:i', $D4_TS_Start) . " - " . date('H:i', $D4_TS_End) . " | " . decimal_to_time($SUM_D4);
echo "<br>";
echo date("d/m", $D5_TS_Start) . " | " . date('H:i', $D5_TS_Start) . " - " . date('H:i', $D5_TS_End) . " | " . decimal_to_time($SUM_D5);
echo "<br>";
echo "=====================";
echo "<br>";
$SUM_HRS = $SUM_D1 + $SUM_D2 + $SUM_D3 + $SUM_D4 + $SUM_D5;
echo "WEEK TOTAL:" . decimal_to_time($SUM_HRS);
echo "<br>";
echo "<br>";
echo "Generated Time: " . date("d/m/Y h:i:sa") . "<br>";
?>
<hr>
<input type="button" value="< Back" onclick="history.back()">
