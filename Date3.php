<?php
include "jdf.php";
date_default_timezone_set("Asia/Tehran");
//تاریخ میلادی را داده و به تو st را برایت بر میگرداند
function dateToTimestampM (string $d){
    list($date , $time) = explode(" ", $d);
    list($y,$m,$day) = explode("/", $date);
    list($h,$i,$s) = explode(":", $time);
    return mktime($h,$i,$s,$m,$day,$y);
}
//تاریخ شمسی را داده و به تو st تاریخ را برمیگرداند
function dateToTimestampP (string $d){
    list($date , $time) = explode(" ", $d);
    list($y,$m,$day) = explode("/", $date);
    list($h,$i,$s) = explode(":", $time);
    return jmktime($h,$i,$s,$m,$day,$y);
}
$date="1395/01/24 12:22:30";
$tp=dateToTimestampP($date);
var_dump(date("Y/m/d H:i:s",$tp));
$date2="2016/04/12 12:22:30";
$tp=dateToTimestampM($date2);
echo "<br>";
var_dump(jdate("Y/m/d H:i:s",$tp));
//این includ دوتا تابع داره که سال بدی تبدیل میکنه
//میلادی میدی شمسی میده
echo "<br>";
var_dump(gregorian_to_jalali("2012","04","30","-"));
//شمسی میدی میلادی میده
echo "<br>";
var_dump(jalali_to_gregorian("1382","02","07","/"));
