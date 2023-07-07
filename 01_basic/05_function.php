<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>function</title>
</head>
<body>
  <h1>함수</h1>
  <?php
  function sum($a,$b){
    $result = $a + $b;
    return $result;
  }

  $result = sum(20, 60);
  echo $result;


  // $langs = array("html", "css", "js");
  $langs = ["html", "css", "js"];

  var_dump($langs);

  
  ?>

  <?php
  echo '<pre>';
  print_r($langs);
  
  ?>

  
  <?php
  function output($input){
    echo '<pre>';
    print_r($input);
    echo '<pre>';
  }

  output($langs);
  
  ?>

  <hr>

  <?php

    $greeting = "hello, world";
  function add($a,$b){
    global $greeting;
    echo $greeting;
    $rs = $a + $b;
    return $rs;
  }

 

 $rs2 = add(10,20);
  echo $rs2;
  ?>

  <h2>지역변수</h2>

  <?php
  $var = 10;//전역변수
  function varFunc(){
    // echo "함수 내부에서 호출한 변수는 var의 값은 {$var}이다."; //에러 글로벌 변수지정을 하지 않아서 에러

    global $var;//지역변수
    // echo "함수 내부에서 호출한 변수는 var의 값은 {$var}이다.";

    echo "함수 내부에서 호출한 변수는 var의 값은 {$GLOBALS['var']}이다.";

  }
  varFunc();
    echo "함수 내부에서 호출한 변수는 var의 값은 {$var}이다."; //에러
  ?>

  <h2>정적변수</h2>
  <?php
  function counter(){
    $count = 0;
    echo $count."<br>";
    $count++;
    echo $count."<br>";
  }

  counter();
  counter();
  ?>
<hr/>
  <?php
  function counter2(){
    static $count = 0;
    echo $count."<br>";
    $count++;
    echo $count."<br>";
  }
    counter2();
    counter2();

?>
 
</body>
</html>