<?php


$hostname = 'localhost';
$dbuserid = 'abcmall';
$dbpasswd = "asdf1234";
$dbname = "abcmall";

//디비연결해서 mysqli라는 객체에 담아놓기
$mysqli = new mysqli($hostname, $dbuserid, $dbpasswd, $dbname);

//error handling
if ($mysqli->connect_errno) {
   die('mysqli connection error: ' . $mysqli->connect_error);
}else{
  // echo ("연결 성공!");
}


?>