<?php
  require_once('config.php');
  $number = $_GET["number"];
  
  $sql =" SELECT * FROM board WHERE idx='{$number}'";
  $result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>글수정 - Message Board</title>
</head>

<body>
  <h1>Message Board</h1>

  <h2>글수정</h2>
  <?php
  if($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){

  ?>

  <form action="insert_update.php" method="POST">
    <!-- 포스트 방식으로 넘어갈수 있게 input tag -->
    <input type="hidden" name="number" value="<?=$number ?>" />
    <p>
      <label for=" username">제목: </label>
      <input type="text" id="username" name="name" value="<?=$row["name"] ?>">
    </p>
    <p>
      <label for=" usermsg">메시지: </label>
      <textarea name="message" id="usermsg" cols="30" rows="10"> <?=$row["message"] ?></textarea>
    </p>
    <input type="submit" value="전송">
  </form>

  <?php
      }
      ?>
  <hr>
  <a href="index.php">home</a>
  <hr>

</body>

</html>