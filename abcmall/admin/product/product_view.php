<?php

  include_once $_SERVER['DOCUMENT_ROOT'].'/abcmall/inc/admin_check.php';
  include_once $_SERVER['DOCUMENT_ROOT'].'/abcmall/inc/header.php';


$pid = $_GET['pid'];




$sql = "SELECT pd.*, po.*, pit.filename
FROM products pd
LEFT JOIN product_options po ON pd.pid = po.pid
LEFT JOIN product_image_table pit ON pd.pid = pit.pid
WHERE pd.pid = {$pid};";

$result = $mysqli->query($sql);
$rs = $result->fetch_object();
var_dump($rs);

// //product_option테이블에서 pid가ㅣ $pid와

// $sql2 = "SELECT * FROM product_options Where pid='{$pid}'";
// $result2 = $mysqli->query($sql2);


// while($rs2 = $result2 ->fetch_object()){
//   $options[] = $rs2;
// }
// // var_dump($options);


// $sql3 = "SELECT * FROM product_image_table Where pid='{$pid}'";
// $result3 = $mysqli->query($sql3);
// while($rs3 = $result3 ->fetch_object()){
//   $addImgs[] = $rs3;
// }
// var_dump($addImgs);

  ?>
<div class="container">
  <h2>제품 상세</h2>

  <table class="table">


    <tbody>
      <tr>
        <th>분류 : </th>
        <td><?php echo $rs->cate ?></td>
      </tr>
      <tr>
        <th>제품명 : </th>
        <td><?php echo $rs->name ?></td>
      </tr>
      <tr>
        <th>가격 : </th>
        <td><?php echo $rs->price ?></td>
      </tr>
      <tr>
        <th>전시옵션 : </th>
        <td>
          <?php 
          if($rs->ismain){
            echo "메인";
          }
            if($rs->isnew){
            echo "신제품";
          }
            if($rs->isbest){
            echo "베스트";
          }
            if($rs->isrecom){
            echo "추천";
          }
          
          ?>
        </td>
      </tr>
      <tr>
        <th>위치 : </th>
        <td><?php echo $rs->locate ?></td>
      </tr>
      <tr>
        <th>판매종료일 : </th>
        <td><?php echo $rs->sale_end_date ?></td>
      </tr>
      <tr>
        <th>상세설명 : </th>
        <td><?php echo $rs->content ?></td>
      </tr>
      <tr>
        <th>썸네일 : </th>
        <td><img src="<?php echo $rs->thumbnail ?>" alt=""></td>
      </tr>
      <tr>
        <th>추가이미지 : </th>
        <?php
  if(isset($addImgs)){
    foreach ($addImgs as $img) {
      ?>
        <td><img src="/abcmall/pdata/<?php echo $img->filename ?> " alt=""></td>
      </tr>


      <?php
      }
      }else{
    ?>
      <tr>
        <td colspan="1">검색 결과가 없습니다.</td>
      </tr>
      <?php
    }
    ?>
      <tr>
        <th>옵션 : </th>
        <!-- <?php
  if(isset($options)){
    foreach ($options as $op) {
      ?>
        <td>
          <div class="product_options">
            <span><?php echo $op->option_name ?> </span>
            <span><?php echo $op->option_cnt ?> 개</span>
            <span><?php echo $op->option_price ?> 원</span>
            <img src="<?php echo $op->image_url ?>" alt="">
          </div>
        </td>

        <?php
      }
      }else{
    ?>
      <tr>
        <td colspan="1">검색 결과가 없습니다.</td>
      </tr>
      <?php
    }
    ?> -->

      </tr>
    </tbody>
  </table>



  <hr>
  <a href="product_modify.php?pid=" class="btn btn-primary">수정</a>
  <button type="button" class="btn btn-danger">삭제</button>
  <a href="product_list.php" class="btn btn-secondary">목록</a>


</div>




<?php
  include_once $_SERVER['DOCUMENT_ROOT'].'/abcmall/inc/footer.php';
?>