<?php
  session_start();
  // var_dump($_SESSION['AUID']);
  
  if(isset($_SESSION['AUID'])){
    if($_SESSION['AUID'] !='admin'){
        echo "<script>
                alert('권한이 없습니다.');
                location.href='/abcmall/admin/login.php';
              </script>";
    }
  }else{
       echo "<script>
                alert('권한이 없습니다.');
                location.href='/abcmall/admin/login.php';
              </script>";
  }
  
  include_once $_SERVER['DOCUMENT_ROOT'].'/abcmall/inc/header.php';
  include_once $_SERVER['DOCUMENT_ROOT'].'/abcmall/inc/category_func.php';
  

 
?>

<!-- include summernote css -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs5.min.css"
  integrity="sha512-ngQ4IGzHQ3s/Hh8kMyG4FC74wzitukRMIcTOoKT3EyzFZCILOPF0twiXOQn75eDINUfKBYmzYn2AA8DkAk8veQ=="
  crossorigin="anonymous" referrerpolicy="no-referrer" />

<!-- summernote js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs5.min.js"
  integrity="sha512-6F1RVfnxCprKJmfulcxxym1Dar5FsT/V2jiEUvABiaEiFWoQ8yHvqRM/Slf0qJKiwin6IDQucjXuolCfCKnaJQ=="
  crossorigin="anonymous" referrerpolicy="no-referrer"></script>


<div class="container">
  <h1 class="h3 mt-5">제품 등록</h1>
  <form action="product_ok.php" method="POST" id="product_form" enctype="multipart/form-data">
    <!--첨부파일 갯수 value -->
    <input type="hidden" name="file_table_id" id="file_table_id" value="">
    <!-- editor 내용 value에 넣어주기 -->
    <input type="hidden" name="content" id="content" value="">


    <table class="table">
      <tbody>
        <tr>
          <th scope="row">카테고리 선택</th>
          <td>
            <div class="row">
              <div class="col-md-4">
                <select class="form-select" aria-label="Default select example" id="cate1" name="cate1">
                  <option selected disabled>대분류</option>
                  <?php foreach($cate1 as $c){            
                  ?>
                  <option value="<?php echo $c->code ?>"><?php echo $c->name ?></option>
                  <?php } 
                  ?>
                </select>
              </div>
              <div class="col-md-4">
                <select class="form-select" aria-label="Default select example" id="cate2" name="cate2">
                  <option selected disabled>중분류</option>

                </select>
              </div>
              <div class="col-md-4">
                <select class="form-select" aria-label="Default select example" id="cate3" name="cate3">
                  <option selected disabled>소분류</option>
                </select>

              </div>
            </div>

          </td>


        </tr>
        <tr>
          <th scope="row">
            <label for="name">제품명</label>
          </th>
          <td>
            <input type="text" name="name" id="name" class="form-control">
          </td>
        </tr>
        <tr>
          <th scope="row">
            <label for="price">가격</label>
          </th>
          <td>
            <input type="number" name="price" id="price" min="10000" max="1000000" step="10000" class="form-control">
          </td>
        </tr>
        <tr>
          <th scope="row">
            <label for="name">전시옵션</label>
          </th>
          <td>
            <input class="form-check-input" type="checkbox" value="1" id="ismain" name="ismain">
            <label class="form-check-label" for="ismain">
              메인
            </label>
            <input class="form-check-input" type="checkbox" value="1" id="isnew" name="isnew">
            <label class="form-check-label" for="isnew">
              신제품
            </label>
            <input class="form-check-input" type="checkbox" value="1" id="isbest" name="isbest">
            <label class="form-check-label" for="isbest">
              베스트
            </label>
            <input class="form-check-input" type="checkbox" value="1" id="isrecom" name="isrecom">
            <label class="form-check-label" for="isrecom">
              추천
            </label>
          </td>
        </tr>
        <tr>
          <th scope="row">위치지정</th>
          <td>
            <select class="form-select" name="locate" id="locate" aria-label="Default select example">
              <option value="0">지정안함</option>
              <option value="1">1번위치</option>
              <option value="2">2번위치</option>
            </select>
          </td>
        </tr>
        <tr>
          <th scope="row">판매종료일</th>
          <td>
            <input type="text" name="sale_end_date" id="sale_end_date" class="form-control"
              value="<?php echo date('Y-m-d',strtotime("+6 month")); ?>">
          </td>
        </tr>
        <tr>
          <th scope="row">상세설명</th>
          <td>
            <div id="product_detail"></div>
          </td>
        </tr>
        <tr>
          <th scope="row">썸네일</th>
          <td>
            <input type="file" name="thumbnail" id="thumbnail" class="form-control">
          </td>
        </tr>
        <tr>
          <th scope="row">추가이미지</th>
          <td>
            <input type="file" multiple id="upfile" class="visually-hidden">
            <button type="button" id="selectImg" class="btn btn-primary">이미지
              선택</button>
            <div class="row" id="imageArea">
              <!-- <div class="col" data-imgid="01">
                <img src="" alt="">
                <button class=" btn btn-warning" id="">삭제</button>
              </div> -->
            </div>
          </td>
        </tr>
        <!-- option -->
        <tr>
          <th scope="row">
            <label for="optionsCate1">옵션 선택</label>
            <select name="optionCate1" id="optionCate1">
              <option value="" selected disabled>선택</option>
              <option value="사이즈">사이즈</option>
              <option value="컬러">컬러</option>
            </select>
          </th>
          <td>
            <table>
              <thead>
                <tr class="row">
                  <th scope="col" class="col">옵션명</th>
                  <th scope="col" class="col">재고</th>
                  <th scope="col" class="col">가격</th>
                  <th scope="col" class="col">이미지</th>
                </tr>
              </thead>
              <tbody id="optionBody">
                <tr class="row" id="optionTr">
                  <td class="col">
                    <input type="text" class="form-control" name="optionName1[]">
                  </td>
                  <td class="col d-flex">
                    <input type="text" class="form-control" name="optionCnt1[]"><span>개</span>
                  </td>
                  <td class="col d-flex">
                    <input type="text" class="form-control" name="optionPrice1[]"><span>원</span>
                  </td>
                  <td class="col">
                    <input type="text" class="form-control" name="optionImage1[]">
                  </td>

                </tr>
              </tbody>
            </table>
            <button class="btn btn-primary" id="optionAddBtn" type="button">옵션추가</button>
          </td>
        </tr>
      </tbody>
    </table>
    <button class="btn btn-primary">등록</button>
  </form>
</div>
<script src="../../js/makeOption.js"></script>
<script>
$("#product_form").submit(function() {

  let markupStr = $('#product_detail').summernote('code');
  let content = encodeURIComponent(markupStr);
  $("#content").val(content);
});
//upfile 변경되면 할일
$("#upfile").change(function() {
  let files = $('#upfile').prop('files');
  console.log(files);
  console.log(files[0].name);
  for (file of files) {
    attachFile(file);
  }
}); //upfile을 클릭하면 할일



//첨부파일 넣어주기
function attachFile(file) {
  let formData = new FormData(); //페이지 전환없이 이페이지 바로 이미지 등록
  formData.append('savefile', file); //<input type="file" name="savefile" value="파일명">
  console.log("formdata:", formData);

  $.ajax({
    url: 'product_save_image.php',
    data: formData,
    cache: false,
    contentType: false,
    processData: false,
    dataType: 'json',
    type: "POST",
    error: function(error) {
      console.log('error:', error);
    },
    success: function(return_data) {
      console.log(return_data);
      if (return_data.result == "member") {
        // alert("로그인을 하십시오");
        return;
      } else if (return_data.result == 'image') {
        alert("이미지 파일만 첨부할 수 있습니다.");
        return;
      } else if (return_data.result == 'size') {
        alert("10메가 이하만 첨부할 수 있습니다.");
        return;
      } else if (return_data.result == 'error') {
        alert("관리자에게 문의하세요");
        return;
      } else {
        //첨부이미지 테이블에 저장하면 할일
        let imgid = $("#file_table_id").val() + return_data.imgid + ",";
        $("#file_table_id").val(imgid);
        let html = `
         <div class="col" id="f_${return_data.imgid}" data-imgid="${return_data.imgid}">
              <img src="/abcmall/pdata/${return_data.savefile}" alt="">
              <button type="button" class=" btn btn-warning" id="">삭제</button>
        </div>
        `;
        $("#imageArea").append(html);
      }
    }
  })
}

//추가이미지
$("#selectImg").click(function() {
  $("#upfile").trigger("click");
});

//썸머노트
$('#product_detail').summernote({
  height: 400,
});

//날짜 형식 (판매종료일)
$('#sale_end_date').datepicker({
  dateFormat: 'yy-mm-dd'
});




//이미지 삭제버튼 클릭
$("#imageArea").on("click", "button", function() {
  let imgid = $(this).parent().attr('data-imgid');
  file_delete(imgid);
});

function file_delete(imgid) {
  //숫자가 들어오면 정말로 지울껀지 확인하기
  if (!confirm("정말 삭제하시겠습니까?")) {
    //삭제하기 취소하면 다 거짓으로 아무것도 바뀌지 않는다.
    return false;
  }
  let data = {
    imgid: imgid
  }
  //이부분은 중간 관리자가 하는 부분이라서 최고관리자라면 success if문 안해도 됨.
  $.ajax({
    async: false, //다지운다음 하기 비동기
    type: "post",
    url: 'image_delete.php',
    data: data,
    dataType: "json",
    error: function(error) {
      console.log('error:', error)
    },
    success: function(return_data) {
      if (return_data.result == 'member') {
        alert("로그인을 해주세요!");
        return;
      } else if (return_data.result == 'my') {
        alert("본인이 작성한 제품의 이미지만 삭제할 수 있습니다.");
        return;
      } else if (return_data.result == 'no') {
        alert("삭제실패");
        return;
      } else {
        $("#f_" + imgid).hide();
      }
    }
  });
} //file_delete_func


$("#optionAddBtn").click(function() {
      let optionHtml = $("#optionTr").html();
      optionHtml = `<tr class='row'>${optionHtml}</tr>';
      $("#optionBody").append(optionHtml);
});
</script>

<?php
  include_once $_SERVER['DOCUMENT_ROOT'].'/abcmall/inc/footer.php';
  
?>