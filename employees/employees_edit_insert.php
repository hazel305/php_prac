<?php
include_once("db.php");

$empno = $_POST["emp_no"];
$name = $_POST["name"];
$hiredate = $_POST["hire_date"];

$sql = "UPDATE employees SET name='$name', hire_date='$hiredate' where emp_no=$empno";
$result = $mysqli->query($sql);

if($result ==false){
  echo "수정 실패!";
}else{
  echo "<script>alert('수정되었습니다.');</script>";
   echo "<script>location.href='employees_list.php';</script>";
}


?>