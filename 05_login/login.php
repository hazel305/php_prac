<?php
 session_start();
 $title="로그인";
 
if($_SERVER["REQUEST_METHOD"]=="POST"){
  // echo $_POST["email"];
  // output($_POST);
  $email = filter_input(INPUT_POST,"email",FILTER_VALIDATE_EMAIL);

  $passwd = $_POST["passwd"];
  

  // if($email == false){
  //   $status = "이메일 형식에 맞춰 입력해주세요";
  // }

  if(authenticate_user($email,$passwd)){
    $_SESSION["admin_email"] = $email;
    redirect("admin.php");
    die();
  }else{
    $status = "관리자 정보와 맞지 않습니다.";
  }
    if($email == false){
    $status = "이메일 형식에 맞춰 입력해주세요";
  }
};
// var_dump($_POST);


?>
<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?=$title; ?></title>
  </title>
</head>

<body>
  <h1><?=$title; ?></h1>
  <form action="" method="POST">
    <div>
      <label for="email">email:</label>
      <input type="text" id=" email" name="email" />
    </div>
    <div>
      <label for="passwd">password:</label>
      <input type="password" id="passwd" name="passwd" />
    </div>
    <input type="submit" value="로그인" />
  </form>
  <div class="feedback">
    <?php
    if(isset($status)){
      echo $status;
    }
    ?>
  </div>
</body>

</html>