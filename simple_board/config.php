<?php

//절차지향방식

$conn = mysqli_connect('localhost', 'hazel', 'asdf1234', 'hazel');

if(mysqli_connect_errno())
{
  echo "DB연결에 실패했습니다." . mysqli_connect_errno();
  exit();
}

//객체지향 방식
// $mysqli = new mysqli('localhost', 'hazel', 'asdf1234', 'hazel');

// if($mysqli-> connect_errno)
// {
//   echo "DB연결에 실패했습니다." . if$mysqli-> connect_errno;
// ;
//   exit();
// }

?>