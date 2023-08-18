<?php
    require_once('config.php'); //db접속

    //테이블에 값을 추가 / 글로벌 포스트로 넘어온다.
    $username = $_POST['name'];
    $usermsg = $_POST['message'];

    //mysql hj
    //idx(숫자), name(글자),message (긴글자)

    $sql = "INSERT INTO board (name, message) VALUES ('$username','$usermsg')";

    //mysqli_query(연결정보, sql문을 실행해라)
    $result = mysqli_query($conn, $sql);//$conn에 정보로 DB에 접속하고 Sql 문장 실행


    if($result == false){
      echo "저장 실패";
    }else{
      echo "<script>location.href='index.php';</script>";
    }
    
  // 연결 끊기 (디비)
  mysqli_close($conn);

?>