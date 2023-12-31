<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>글쓰기 - bbs </title>
    <link rel="stylesheet" href="../css/bbs_style.css">
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
                    <td><label for="title">제목: </label></td>
                    <td><input type="text" id="title" name="title"></td>
                </tr>
                <tr>
                    <td><label for="writer">글쓴이: </label></td>
                    <td><input type="text" id="writer" name="name"></td>
                </tr>
                <tr>
                    <td><label for="content">내용: </label></td>
                    <td><textarea name="content" id="content" cols="30" rows="10"></textarea></td>
                </tr>
                <tr>
                    <td><label for="pw">비밀번호:  </label></td>
                    <td><input type="password" id="pw" name="pw"></td>
                </tr>
            </table>
            <button>글쓰기</button>
        </form>
    </div>
</body>
</html> 