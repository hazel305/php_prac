<?php

  include_once $_SERVER['DOCUMENT_ROOT'].'/abcmall/inc/admin_check.php';
  include_once $_SERVER['DOCUMENT_ROOT'].'/abcmall/inc/header.php';
  
  ?>
<div class="container">
  <h2>쿠폰리스트</h2>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>썸네일</th>
        <th>쿠폰명</th>
        <th>타입</th>
        <th>할인가</th>
        <th>할인률</th>
        <th>최소사용금액</th>
        <th>최대할인금액</th>
        <th>상태</th>
      </tr>
    </thead>
  </table>
  <a href="coupon_up.php" class="btn btn-primary">쿠폰 등록</a>
</div>


<?php
  include_once $_SERVER['DOCUMENT_ROOT'].'/abcmall/inc/footer.php';
  
?>