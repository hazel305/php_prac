<?php
 session_start();

require_once("inc/function.php");
ensure_is_user_admin();

//  require_once("inc/function.php");
//  require_once("inc/config.php");

 
?>
<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>관리자 페이지</title>
  </title>
</head>

<body>
  <h1>관리자 페이지</h1>
  <ul>
    <p>

      <?php
      echo "{$_SESSION["admin_email"]}님 반갑습니다.";
    ?>
    </p>
    <p>
      <a href="logout.php">로그아웃</a>
    </p>

  </ul>
</body>

</html>