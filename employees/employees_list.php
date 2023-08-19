<?php
include('db.php');


$sql = "SELECT * FROM employees order by emp_no desc limit 0, 5";
$result = $mysqli->query($sql);
while ($rs = $result -> fetch_object()){
  $emp[] = $rs;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>employees list</title>
</head>

<body>
  <h1>사원명부</h1>
  <table>
    <thead>
      <tr>
        <th scope="col">사원번호</th>
        <th scope="col">사원명</th>
        <th scope="col">입사일</th>
      </tr>
    </thead>
    <tbody>
      <?php
      if(isset($emp)){
        foreach ($emp as $item) {
          ?>

      <tr>
        <td><?php echo $item->emp_no ?></td>
        <td><a href="employees_view.php?emp_no=<?php echo $item-> emp_no?> "><?php echo $item->name ?></a></td>
        <td>
          <?php echo $item->hire_date ?></td>
      </tr>
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
    </tbody>

  </table>

  <a href="/phymyadmin/employees/employees_add.php">사원 정보 입력하기</a>

</body>

</html>