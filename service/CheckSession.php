<?php
session_start();
if (!isset($_SESSION["id"])) {
    header("Location: /admin/login",true,301);
    exit();
}

