<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/bbs/inc/db.php');


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bbs_style.css" />
  <title>게시판</title>
</head>

<body>
  <div class="container">
    <h1>자유게시판</h1>
    <table>
      <colgroup>
        <col class="col1">
        <col class="col2">
        <col class="col3">
        <col class="col3">
        <col class="col4">
        <col class="col4">
      </colgroup>
      <thead>
        <tr>
          <th>번호</th>
          <th>제목</th>
          <th>글쓴이</th>
          <th>작성일</th>
          <th>조회수</th>
          <th>추천수</th>
        </tr>

      </thead>
      <tbody>
        <?php

        $sql = "SELECT * FROM  board ORDER BY idx DESC LIMIT 0,10";
       $result = $conn -> query($sql);
       while($row = $result->fetch_array(MYSQLI_ASSOC)){
          var_dump($row);
?>
        <tr>
          <td> <?=$row ["idx"]?></td>
          <td><?=$row ["name"]?></td>
          <td><?=$row ["title"]?></td>
          <td><?=$row ["content"]?></td>
          <td><?=$row ["hit"]?></td>
          <td><?=$row ["thumbsup"]?></td>
        </tr>


        <?php
}

?>
      </tbody>
    </table>
    <div class="btns">
      <a href="">글쓰기</a>
    </div>
  </div>
</body>

</html>