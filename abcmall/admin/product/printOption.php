<?php

include_once $_SERVER['DOCUMENT_ROOT'].'/abcmall/inc/dbcon.php';

$cate = $_POST['cate'];
$step = $_POST['step'];
$category = $_POST['category'];

$html = "<option selected disabled>".$category."</option>";
$query = "select * from category where step=".$step." and pcode='".$cate."'"; //카테고리에서 대분류 조회

$result = $mysqli->query($query); //쿼리실행결과를 $result에 할당

while($rs =$result ->fetch_object()){ //연관배열로 뽑아온것을 rs에 담음

  $html.="<option value=\"".$rs->code."\">".$rs->name."</option>";


}
echo $html;
?>