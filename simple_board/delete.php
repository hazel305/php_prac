<?php

require_once("config.php");
  $number = $_GET["number"];
 

  $sql = "DELETE FROM board WHERE idx=$number";



// mysqli_query(연결정보, sql문);
$result = mysqli_query($conn, $sql); //$conn에 정보로 db에 접속하고 sql문장 실행

if($result  == false){
  echo "수정 실패";
}else{
  echo "<script>location.href='index.php';</script>";
}

mysqli_close($conn); //연결 끊기

?>