<?php
if(isset($_COOKIE['fullName']) && isset($_COOKIE['fullName'] != null)){
    setcookie('fullName' , '' , time() - 3600 -60, '/');
    header('Location: index.php');
}
?>