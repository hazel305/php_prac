<!DOCTYPE html>
<html>

<head>
  <title>title</title>
</head>

<body>
  <?php var_dump($_GET);?>
  <hr>
  <?php var_dump($_POST);?>
  <hr>
  <?php var_dump($_REQUEST);?>
  <hr>
  <form method="post">
    이름<input type="text" name="name">
    번호<input type="text" name="phone[]">
    <input type="hidden" name="gender" value="male">
    <input type="submit" value="go!">
  </form>
</body>