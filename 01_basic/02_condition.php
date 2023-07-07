<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>php 조건문</title>
</head>
<body>
  <h1>php조건문</h1>
  <?php 
  //$result = 1<3; //1<3 1 true, 3<1 false
  $result = 1 == false; //1==true 1, 1==false
  echo $result;

  $first_name = "길동";
  $last_name = "홍";

  if($last_name =="김"){
    echo "$last_name 길동";
  }else{
    echo "$last_name 길동";
    
  }

  if($last_name =="홍" && $first_name =="길동"){
    echo "$last_name$first_name";
  }

  
  if($last_name =="김" xor $first_name =="도령"){
    //두개중 하나만 참이여야 참, 둘다 거짓이거나 참일 경우, 거짓
    echo "$last_name$first_name";
  }
  ?>

</body>
</html>