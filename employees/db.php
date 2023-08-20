<?php
$mysqli = new mysqli('localhost', 'abcweb', 'asdf1234', 'abcweb');

if ($mysqli->connect_errno) {
   die('mysqli connection error: ' . $mysqli->connect_error);
}else{
  // echo ("연결 성공!");
}
?>