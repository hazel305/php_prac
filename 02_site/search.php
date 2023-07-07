<?php
$title = "Search";
require("header.php");
// include("header.php");

?>
<main>
  <h2>Search Form</h2>
  <form action="result.php">
    <input type="text" name="category" placeholder="category" />
    <input type="text" name="product_name" placeholder="name" />
    <input type="number" name="limit" placeholder="limit" />
    <button>검색</button>
  </form>
</main>
<?php
require_once("footer.php");
?>