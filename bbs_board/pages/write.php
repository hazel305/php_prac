<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/bbs_style.css" />
  <title>글쓰기 - bbs</title>
</head>

<body>
  <div class="container">
    <h1>자유게시판</h1>
    <h2>글쓰기</h2>
    <form action="write_ok.php" method="POST" class="write_form">
      <table>
        <colgroup>
          <col class="label">
          <col class="content">
        </colgroup>

        <tr>
          <td>
            <label for="title">제목: </label>
          </td>
          <td> <input type="text" id="title" name="title"></td>
        </tr>
        <tr>
          <td> <label for="name">글쓴이: </label></td>
          <td> <input type="text" id="name" name="name"></td>
        </tr>
        <tr>

          <td> <label for="content">내용: </label></td>
          <td> <textarea type="text" id="content" name="content" cols="30" rows="10"></textarea></td>
        </tr>
        <tr>

          <td> <label for=" pw">비밀번호: </label></td>

          <td> <input type="password" id="pw" name="pw"></td>
        </tr>
        <tr>

          <td> <label for=" pw">잠금: </label></td>

          <td>
            <input type="checkbox" name="lock_post" id="lockpost" />
            <label for=" lockpost">해당글을 잠급니다.</label>
          </td>
        </tr>

      </table>
      <button>글쓰기</button>
    </form>

  </div>
</body>

</html>