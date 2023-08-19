<?php
  include("db.php");
  
  

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>employees add</title>
</head>

<body>
  <h1>데이터 입력하기</h1>
  <form action="employees_insert.php" method="POST">
    <!-- <p>
      <label for="emp_no">사원번호 NO : </label>
      <input type="password" name="emp_no" id="emp_no" placeholder="****">
    </p> -->
    <p>
      <label for="name">사원명 : </label>
      <input type="text" name="name" id="name" placeholder="이름을 입력하세요">
    </p>
    <p>
      <label for="hire_date">입사일 : </label>
      <input type="date" name="hire_date" id="hire_date">
    </p>
    <input type="submit" value="ADD">
  </form>

</body>

</html>