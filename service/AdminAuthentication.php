<?php


use model\Admin;
use database\Repostory\AdminRepostory;

$admin = new Admin("", "");
if (!empty($_POST["username"]) && !empty($_POST["password"])) {
    $admin->username = $_POST["username"];
    $admin->password = $_POST["password"];
} else {
    header("Location: /admin/login?error=empty_fields", true, 301);
    exit();
}
$result = AdminRepostory::getId($admin);

if ($result === false) {
    header("Location: /admin/login?error",true,301);
} else  {
    session_start(['cookie_httponly'=> true]);
    $_SESSION['id'] = $result;
    header("Location: /admin/dashboard",true,301);
}

?>