<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/bbs/inc/db.php');
$pno = $_GET["idx"];

$sql = "SELECT * FROM board WHERE idx='{$pno}'";
$result = $conn->query($sql);

$sqlarr = $result -> fetch_assoc();


$hit = $sqlarr["hit"] + 1; //조회수 증가시키기

// var_dump($sqlarr);

$sql2 = "UPDATE board set hit='{$hit}' where  idx='{$pno}'";
$result2  = $conn->query($sql2);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/bbs_style.css" />
  <title>글읽기 - bbs</title>
</head>

<body>
  <div id="passform">
    <form action="" method="POST">
      <label for="passwordcf">비밀번호 입력:</label>
      <input type="password" id="passwordcf" name="pw_chk">
      <button>확인</button>
    </form>
  </div>
  <?php

  $ppw = $sqlarr['pw'];// 글 작성시에 입력한 비번
  if (isset($_POST['pw_chk'])) {
    $cpw = $_POST['pw_chk']; //글 보기 위해 입력한 비번
    if (password_verify($cpw, $ppw)) {
?>
  <script>
  location.replace("read.php?idx=<?=$pno?>");
  </script>
  <?php

    } else {
      echo "<scrpit>alert('비번이 맞지 않습니다.');</scrpit>";
    }
  }
  
  ?>


  </div>
</body>

</html>