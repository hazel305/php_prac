<?php

  include_once $_SERVER['DOCUMENT_ROOT'].'/abcmall/inc/dbcon.php';
  include_once $_SERVER['DOCUMENT_ROOT'].'/abcmall/inc/admin_check.php';

$pid = $_REQUEST['pid'];
$ismain = $_REQUEST["ismain"];
$isnew = $_REQUEST["isnew"];
$isbest = $_REQUEST["isbest"];
$isrecom = $_REQUEST["isrecom"];
$start = $_REQUEST["start"];

var_dump($pid);
echo '<hr>';
var_dump($ismain);
echo '<hr>';
var_dump($isnew);
echo '<hr>';
var_dump($isbest);
echo '<hr>';
var_dump($isrecom);
echo '<hr>';
var_dump($start);
echo '<hr>';


foreach($pid as $p){
  $ismain[$p]= $ismain[$p] ??0;
  $isnew[$p]= $isnew[$p] ?? 0;
  $isbest[$p]= $isbest[$p] ?? 0;
  $isrecom[$p]= $isrecom[$p] ?? 0;
  $start[$p]= $start[$p] ?? 0;
  
     $query = "update products set ismain=".$ismain[$p].", isnew=".$isnew[$p].", isbest=".$isbest[$p].", isrecom=".$isrecom[$p].", status=".$start[$p]." where pid=".$p;
    $rs=$mysqli->query($query) or die($mysqli->error);

}

if($rs){
  echo "<script>
  alert('일괄수정완료');
  history.back();
  </script>";
}else{
  echo "<script>
  alert('일괄수정 실패');
  history.back();
  </script>";
}

?>