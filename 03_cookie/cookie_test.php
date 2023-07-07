<?php
$cookieName = "city";
$cookieValue = "seoul";

setcookie($cookieName, $cookieValue, time() + 60, "/");
setcookie($cookieName, $cookieValue, time() - 60, "/");


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>php cookie</title>
</head>

<body>
  <h1>cookie</h1>

  <?php
if(isset($_COOKIE{$cookieName})){
    echo "{$cookieName}쿠키가 생성되었습니다.";
  
}else{
    echo "{$cookieName}쿠키가 생성되지 않았습니다.";
  
}
  

?>
</body>

</html>