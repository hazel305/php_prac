<?php
require_once("config.php");
$keyword = $_GET['searchkey'];

$sql = "SELECT * FROM board WHERE message LIKE '%$keyword%'";
$result = mysqli_query($conn, $sql);

// var_dump($row = mysqli_fetch_array($result, MYSQLI_ASSOC));
$list = "";
while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
  $list = $list . "<li><a href=\"view.php?number={$row['idx']}\">{$row['name']}</a></a></li>";
}




?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>검색결과</title>
</head>

<body>
  <h1>검색결과</h1>
  <!--리스트 조회  -->
  <ul>
    <?php echo $list ?>
  </ul>


  <a href="write.php">글쓰기</a>


  <hr>
  <h2>메시지 검색</h2>
  <form action="search.php" method="get">
    <p>검색할 키워드를 입력하세요.</p>
    <p>
      <label for="msgsearch">키워드: </label>
      <input type="text" id="msgsearch" name="searchkey">
    </p>
    <input type="submit" value="검색">
  </form>


</body>

</html>