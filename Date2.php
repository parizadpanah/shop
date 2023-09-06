<?php
date_default_timezone_set("Asia/Tehran");
function dateToTimestamp (string $d){
    list($date , $time) = explode(" ", $d);
    list($y,$m,$day) = explode("/", $date);
    list($h,$i,$s) = explode(":", $time);
    return mktime($h,$i,$s,$m,$day,$y);

}
function backDay(int $day){
    return ($day*24*60*60);
}
$date = date("Y/m/d h:i:s");
$tp = dateToTimestamp($date);
echo  "<br>". $date;
echo  "<br>";
$day=5;
$tp -= backDay($day);
echo "<br>". date("Y/m/d h:i:s", $tp);
?>
