<?php

include("db.php");

$empnum = $_POST["emp_no"];
$empname = $_POST["name"];
$hiredate = $_POST["hire_date"];


$sql = "INSERT INTO employees (emp_no,name, hire_date) VALUES('$empnum','$empname','$hiredate')";

$result = mysqli_query($mysqli , $sql); 

if($result ==false){
  echo "저장 실패!";
}else{
  echo "<script>alert('저장되었습니다.');</script>";
   echo "<script>location.href='employees_list.php';</script>";
}

?>