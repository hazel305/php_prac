<?php

function output($input)
{
  echo "<pre>";
  print_r($input);
  echo "</pre>";

}

function authenticate_user($email, $password){
  if($email == USER_EMAIL && $password ==PASSWORD){
    return true;
  }
}

function redirect($url){
  header("Location:{$url}");
}

function is_user_admin(){
  return isset($_SESSION["admin_email"]);
}

function ensure_is_user_admin(){
 if(!is_user_admin()){
    redirect("login.php");
 }
}
?>