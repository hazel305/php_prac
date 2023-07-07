<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/bbs/inc/db.php');
$pno = $_GET['idx'];

// var_dump($pno);
// var_dump($_POST);
$username =$_POST["name"];
// $userpw = $_POST["pw"];
$userpw = password_hash($_POST["pw"],PASSWORD_DEFAULT);

$title = $_POST["title"];
$content = $_POST["content"];
// $date = date("Y-m-d");

$sql = "UPDATE board SET name='{$username}',pw='{$userpw}', title='{$title}',content='{$content}' WHERE idx='{$pno}'";

//Check connection
if ($conn->query($sql) === TRUE) {
    echo "<script>
    alert('글수정이 완료되었습니다.');
    location.href='../index.php';</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();

?>