<?php
include_once('db.php');

$empno = $_GET['emp_no'];

$sql = "SELECT * FROM employees WHERE emp_no='{$empno}'";
$result = $mysqli->query($sql);
while($rs = $result ->fetch_object()){
  $rsc[] = $rs;
}

// var_dump($rsc);


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>employees</title>
</head>

<body>
  <h1>사원정보</h1>
  <?php
  if(isset($rsc)){
    foreach ($rsc as $item) {
      ?>

  <h3>사원번호:<?php echo $item->emp_no ?></h3>
  <h3>사원명:<?php echo $item->name ?></h3>
  <h3>입사일:<?php echo $item->hire_date ?></h3>

  <?php
    }
    }else{
  ?>

  <tr>
    <td colspan="3">검색 결과가 없습니다.</td>
  </tr>
  <?php
    }
    ?>
  <ul>
    <a href="employees_list.php">목록</a>
    <a href="employees_edit.php?emp_no=<?php echo $item->emp_no ?>">글수정</a>
    <a href="employees_delete.php?emp_no=<?php echo $item->emp_no ?>">글삭제</a>
  </ul>


</body>

</html>