<?php
  include("db.php");
$empno = $_GET['emp_no'];

$sql = "SELECT * FROM employees WHERE emp_no='{$empno}'";
 $result = $mysqli->query($sql);
while ($rs = $result -> fetch_object()){
  $rsc[] = $rs;
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>employees edit</title>
</head>

<body>
  <h1>사원정보 수정하기</h1>
  <?php
  if (isset($rsc)) {
    foreach ($rsc as $item) {
      ?>
  <form action="employees_edit_insert.php" method="POST">
    <p>
      <!-- <label for="emp_no">사원번호 NO : </label> -->
      <input type="hidden" name="emp_no" id="emp_no" value="<?php echo $item->emp_no ?>">
    </p>
    <p>
      <label for="name">사원명 : </label>
      <input type="text" name="name" id="name" value="<?php echo $item->name ?>">
    </p>
    <p>
      <label for="hire_date">입사일 : </label>
      <input type="date" name="hire_date" id="hire_date" value="<?php echo $item->hire_date ?>">
    </p>
    <input type="submit" value="EDIT">
  </form>

  <?php
    }
  } else {
    ?>
  <tr>
    <td colspan="3">검색 결과가 없습니다.</td>
  </tr>
  <?php

  }
  ?>

</body>

</html>