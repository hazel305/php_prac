<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/bbs/inc/db.php');
$pno = $_GET["idx"];

$sql = "SELECT * FROM board WHERE idx='{$pno}'";
//그값을 입력하는 그내용이 있게
$result = $conn->query($sql);

$sqlarr = $result -> fetch_assoc();



?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/bbs_style.css" />
  <title>글수정 - bbs</title>
</head>

<body>
  <div class="container">
    <h1>자유게시판</h1>
    <h2>글수정</h2>
    <form action="modify_ok.php?idx=<?=$pno?>" method="POST" class="write_form">
      <table>
        <colgroup>
          <col class="label">
          <col class="content">
        </colgroup>

        <tr>
          <td>
            <label for="title">제목: </label>
          </td>
          <td> <input type="text" id="title" name="title" value="<?=$sqlarr["title"]?>"></td>
        </tr>
        <tr>
          <td> <label for=" name">글쓴이: </label></td>
          <td> <input type="text" id="name" name="name" value="<?=$sqlarr["name"]?>"></td>
        </tr>
        <tr>

          <td> <label for="content">내용: </label></td>
          <td> <textarea type="text" id="content" name="content" cols="30" rows="10"><?=$sqlarr["content"]?></textarea>
          </td>
        </tr>
        <tr>

          <td> <label for=" pw">비밀번호: </label></td>

          <td> <input type="password" id="pw" name="pw"></td>
        </tr>

      </table>
      <button>수정완료</button>
    </form>

    <div class="footer">
      <div class="list">
        <a href="../index.php">목록</a>
      </div>
      <p class="btns">
        <a href="modify.php?idx=<?=$pno?>">수정</a>
        <a href="thumbsup.php?idx=<?=$pno?>">추천</a>
        <a href="delete.php?idx=<?=$pno?>">삭제</a>
      </p>

    </div>

  </div>
</body>

</html>