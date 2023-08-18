<?php
$conn = mysqli_connect('localhost', 'hj', 'asdf1234', 'hj');

if(mysqli_connect_errno()){
   echo "디비연결에 실패!". mysqli_connect_error();
   exit();
}

// else{
//      echo "디비연결에 성공!";
// }

?>