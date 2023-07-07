<?php
require_once("config.php");
$number = $_GET["number"];


$sql =" SELECT * FROM board WHERE idx='{$number}'";
$result = mysqli_query($conn, $sql);
// var_dump($row = mysqli_fetch_array($result, MYSQLI_ASSOC));

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Message Board</title>
</head>

<body>
  <h1>글읽기</h1>

  <?php
  if($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
  

  ?>
  <h3>글번호:<?=$row["idx"] ?><h3>
      <h4>글제목:<?=$row["name"] ?> </h4>
      <div>
        <?=$row["message"] ?>
      </div>
      <?php
      }
      ?>
      <ul>
        <a href="index.php">home</a>
        <a href="update.php?number=<?="{$row['idx']}"?>">글수정</a>
        <a href="delete.php?number=<?="{$row['idx']}"?>">글삭제</a>
      </ul>



</body>

</html>