<?php
$title = "검색";
require("header.php");
// include("header.php");

?>
<main>
  <h2>검색 결과</h2>
  <?php

    var_dump($_GET);
  // $category = $_GET['category'];
  // $product_name = $_GET['product_name'];
  // $limit = $_GET['limit'];
  
  $category = filter_input(INPUT_GET, 'category', FILTER_VALIDATE_INT);
  $product_name = $_GET['product_name'];
  $limit = filter_input(INPUT_GET, 'limit', FILTER_VALIDATE_INT);

  // if($category ==false || $limit ==false) {
  //   die();
  // }


  
  if($category == false ) {
    $category = 1;
  }
  if ($limit == false) {
    $limit = 10;
  }
  
    // echo "검색 키워드 :{$product_name}<br>검색 카테고리 :{$category}<br>검색 키워드 :{$limit}";
  ?>

  <p>검색 카테고리 : <?=$category; ?> </p>
  <p>검색 키워드 : <?=$product_name; ?> </p>
  <p>검색 결과수: <?=$limit; ?></p>








</main>
<?php
include("footer.php");
?>