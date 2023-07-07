<?php
//만약에 타이틀이 없을 경우 빈값을 넣어줘서 에러방지
if(!isset($title)){
  $title = "";
}

?>

<?php
// $title = "home";
// require("headers.php");
include("header.php");

?>
  <main>
    <h2>main content</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Reiciendis doloremque veritatis corporis ipsam illo, ipsum ducimus
              sunt facere ut cumque debitis illum perferendis accusantium eum
              amet. Nostrum iure veritatis necessitatibus.</p>
  </main>
<?php
require_once("footer.php");
?>