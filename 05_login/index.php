<?php
 session_start();
 $title="홈";
 require_once("inc/function.php");
//  require_once("inc/config.php");

 
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
  <ul>
    <li><a href="login.php">로그인</a></li>
    <li><a href="logout.php">로그아웃</a></li>

  </ul>
</body>

</html>