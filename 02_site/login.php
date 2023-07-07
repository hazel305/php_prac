<?php
//만약에 타이틀이 없을 경우 빈값을 넣어줘서 에러방지
if(!isset($title)){
  $title = "";
}

?>

<?php
$title = "login";
// require("headers.php");
include_once("header.php");

?>
<main>
  <h2>login</h2>
  <form action="request.php" method="POST">
    <div>
      <label for="username">Name:</label>
      <input type="text" id="username" name="name" />
    </div>
    <!-- <div>
      <label for="useremail">Email:</label>
      <input type="text" id="useremail" name="email" />
    </div> -->
    <div>
      <label for="userpw">PW:</label>
      <input type="password" id="userpw" name="password" />
    </div>
    <button>로그인</button>
  </form>
</main>
<?php
require_once("footer.php");
?>