<?php

if(isset($_COOKIE['fullName'])){
    $_COOKIE('fullName' , '' , time() - 3600 -60, '/');
    header('index.php');
}
?>