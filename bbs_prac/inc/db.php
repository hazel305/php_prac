<?php

//객체지향 방식
$mysqli = new mysqli("localhost","bbs","asdf1234","bbs");

// Check connection
if ($mysqli -> connect_errno) {
  echo "연결 실패: " . $mysqli -> connect_error;
  exit();
}else{
echo "연결 성공!";
}



?>