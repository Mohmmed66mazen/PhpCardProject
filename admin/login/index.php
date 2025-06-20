<?php
$root = $_SERVER['DOCUMENT_ROOT'];

 switch ($_SERVER['REQUEST_METHOD']){
    case 'GET':
        include $root.'/view/AdminView.html';
        break;
    case 'POST':
        require $root.'/service/AdminAuthentication.php';
        break;
    default:
        echo 'unsupported';
 }
?>