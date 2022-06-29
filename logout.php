<?php
if(isset($_COOKIE['fullName'])){
    setcookie('fullName' , '' , time() - 3600 -60, '/');
    header('Location: index.php');
}
?>