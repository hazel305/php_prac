<?php
  session_start();
  include_once $_SERVER['DOCUMENT_ROOT'].'/abcmall/inc/dbcon.php';
  // include_once $_SERVER['DOCUMENT_ROOT'].'/abcmall/inc/category_func.php';

    //관리자 검사(관리자 여부 확인)
    if(!isset($_SESSION['AUID'])){
        $return_data = array("result"=>"member");
        echo json_encode($return_data);
        exit;
    }


    $imgid = $_POST['imgid'];
    //product_image_table에서 imgid값에 $imgid인거 삭제 
    //$sql = "DELETE FROM product_image_table WHERE imgid={$imgid}";
    //status를 통해서 비활성화 시키기( 그렇게 해서 이미지 보이지 않게 하기)
    $sql = "SELECT * FROM product_image_table where imgid={$imgid}";
    $result = $mysqli->query($sql);
    $rs = $result->fetch_object(); 
    
    if($rs->userid != $_SESSION["AUID"]){
      $return_data = array("result"=>"my");
        echo json_encode($return_data);
        exit;
        
    }
   
      $sql = "UPDATE product_image_table set status=0 where imgid={$imgid}";
      $result = $mysqli->query($sql);
      
      if($result){
        $delete_file = $_SERVER['DOCUMENT_ROOT'].'/abcmall/pdata/'.$rs->filename;
        unlink($delete_file);
        
        $return_data = array("result"=>"yes");
        echo json_encode($return_data);
        
      }else{
        $return_data = array("result"=>"no");
        echo json_encode($return_data);
      }
    
   

?>