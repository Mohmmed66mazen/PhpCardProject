<?php
session_start();

if (isset($_SESSION["id"])) {
	header("Location: /admin/dashboard",true,301);

}else{
	header("Location: /admin/login?error",true,301);
}


