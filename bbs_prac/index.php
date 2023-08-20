<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/bbs/inc/db.php');

// echo strlen("123 abd");
// echo strlen("가나다");
// echo mb_strlen("가나다"); //문자셋 기준 3
// echo iconv_strlen("가나다");//문자셋 기준 3 

// $txt = 'php web 개발';
// $txt2 = str_replace('web','app',$txt); //php app 개발
// echo $txt2;

// $txt3 = substr('abcdef',0,3);
// echo $txt3;  //abc
// $txt4 = substr('abcdef',3,2);
// echo $txt4;  //de

// $txt5 = iconv_substr("가나다라마바사아자",0,5,'utf-8');
// echo $txt5; //가나다라마


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>bbs 게시판</title>
    <link rel="stylesheet" href="css/bbs_style.css">
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
                $sql ="SELECT * FROM board order by idx desc limit 0, 10";
                $result =$mysqli->query($sql);
                while($row = $result ->fetch_array(MYSQLI_ASSOC)){
                    // var_dump($row);

                  $title = $row['title'];
                  //이조건이 참이면 타이틀을 짧은 제목으로 다시넣겠다
                  //제목의 길이가 길면 이렇게 짤라서 나오게 할수 있음.
                  if(iconv_strlen($title)>10){
                      $title = str_replace($row['title'],iconv_substr($row['title'],0,10,'utf-8')."...",$row['title']);
                  }
                ?>
                <tr>
                    <td><?=$row['idx']; ?></td>
                    <td> <a href="page/read.php?idx=<?=$row['idx']; ?>"><?=$title; ?></a></td>
                    <td><?=$row['name']; ?></td>
                    <td><?=$row['date']; ?></td>
                    <td><?=$row['hit']; ?></td>
                    <td><?=$row['thumbsup']; ?></td>
                </tr>

                <?php
                }
                ?>
            </tbody>
        </table>
        <div class="btns">
        <a href="/bbs/page/write.php">글쓰기</a>
        </div>
    </div>
</body>
</html>,a