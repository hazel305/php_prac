<h1>반복문</h1>
<h2>while문</h2>

<?php
$i = 0;
while($i<5){
  echo $i++ . "<br>";
}
?>


<?php
$langs = array('html', 'css', 'js');
$i = 0;
while($i < count($langs)){
  echo $langs[$i] . "<br>";
  $i++;
}
?>

<h2>do while</h2>

<?php

$i = 0;

do {
  echo $i++ . "<br>";

} while ($i < 5);


?>

<?php
$langs = array('html', 'css', 'js');
$i = 0;

do{
 echo $langs[$i] . "<br>";
  $i++;
}while($i < count($langs))
 
?>

<h2>for</h2>

<?php
$i = 0;
for ($i = 0; $i < 5; $i++){
  echo "{$i}<br>";
}
?>

<?php
$langs = array('html', 'css', 'js');
$i = 0;

for ($i = 0; $i < count($langs);$i++){
  echo $langs[$i] . "<br>";
}

?>

<h2>foreach</h2>

<?php
$nums = array(0, 2, 4, 6, 8);

foreach($nums as $num){
  echo "변수명의 \$nums의 현재값은 {$num}입니다<br>";
}
?>

<?php
$scores = array(
  '국어'=>80,
  '영어'=>90,
  '수학'=>100,
  '과학'=>95,
);

foreach($scores as $score=>$value){
  echo "{$score}명의 \$scores의 현재값은 {$value}입니다<br>";
}
?>