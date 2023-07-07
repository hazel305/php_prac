<?php
$title = "로그인";
require("header.php");
// include("header.php");

?>
<main>
  <h2>request</h2>
  <?php

  // var_dump($_GET);
  // $name=$_GET['name'];
  // $email=$_GET['email'];
  // echo "{$name}님의 이메일은 {$email}입니다.";
  $name=$_POST['name'];
  $password=$_POST['password'];

  echo "{$name}님의 비번은 {$password}입니다.";

  
  var_dump($_POST);
?>
</main>
<?php
include("footer.php");
?>