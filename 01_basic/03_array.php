<!-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>array</title>
</head>
<body>
  <h1>php 기초</h1>


</body>
</html> -->


<?php

// $arr = array();
// $arr[0] = "html";
// $arr[1] = "css";
// $arr[2] = "js";

$arr = array("html", "css", "js");
echo $arr[0];
if(isset($arr[3])){
echo $arr[3];
}else{
echo "배열 arr[1] 값은 없습니다.";
}



?>

<?php

for($i =0; $i < count($arr); $i++){
  echo $arr[$i].'<br>';
}

?>

<?php

foreach($arr as $ar){
  echo $ar."<br>";
}

?>

<h2>연관배열</h2>

<?php
// $fruits = array();
// $fruits['apple'] = 1000;
// $fruits['banana'] = 2000;
// $fruits['orange'] = 1500;

$fruits = array('apple' => 1000, "banana" => 2000, "orange" => 1500);



var_dump($fruits);
var_dump($arr);
echo $arr[0]."<br>";
echo $fruits["apple"]."<br>";

?>
<hr>

<?php
foreach($fruits as $fruit){
  echo $fruit."<br>";
}
?>
<h3>연관명까지</h3>
<?php
//$fruit =연관배열명, $value=값
foreach($fruits as $fruit=> $value){
  echo $fruit."-".$value."<br>";
}
?>