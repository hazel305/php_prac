<?php
include_once("db.php");
$empno = $_GET["emp_no"];

  $sql = "DELETE FROM employees WHERE emp_no=$empno";
 $result = $mysqli->query($sql);
 
 if($result ==false){
  echo "삭제 실패!";
}else{
  echo "<script>alert('삭제되었습니다.');</script>";
   echo "<script>location.href='employees_list.php';</script>";
}
?>