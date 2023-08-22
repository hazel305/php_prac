<?php
    require_once($_SERVER['DOCUMENT_ROOT'].'/bbs/inc/db.php');

    // var_dump($_POST);

    $username= $_POST["name"];
    //password_hash(원본, 암호화 방식)
    $userpw= password_hash($_POST['pw'], PASSWORD_DEFAULT);
    $title= $_POST["title"];
    $content= $_POST["content"];
    $date = date('Y-m-d');

    echo ($_POST['pw']);
    echo ($userpw);

     $sql = "INSERT INTO board (name, pw,title, content, date) VALUES ('{$username}','{$userpw}','{$title}','{$content}','{$date}')";

     if($mysqli->query($sql)=== TRUE){
        echo "<script>
        alert('글쓰기 완료');
        location.href='../index.php';
        </script>";
     }else{
        echo "ERROR:".$sql."<br>".$mysqli->error;
     }

     $mysqli -> close();
    
?>