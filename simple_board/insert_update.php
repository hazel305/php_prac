<?php

require_once("config.php");
  $number = $_POST["number"];
  $username = $_POST["name"];
  $usermsg = $_POST["message"];

  $sql = "UPDATE board SET name='$username',message='$usermsg' WHERE idx=$number";

//db 테이블에 겂을 추가
// $username = $_POST["name"];
// $usermsg = $_POST["message"];

// $sql = "INSERT INTO board (name, message) VALUES('$username','$usermsg')";

// mysqli_query(연결정보, sql문);
$result = mysqli_query($conn, $sql); //$conn에 정보로 db에 접속하고 sql문장 실행

if($result  ==false){
  echo "삭제 실패";
}else{
  echo "<script>location.href='index.php';</script>";
}

mysqli_close($conn); //연결 끊기

?>