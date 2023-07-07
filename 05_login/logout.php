<?php

session_start();
session_unset();
//모든 것 지우고
session_destroy();

require_once("inc/function.php");
redirect("login.php");
die();

?>