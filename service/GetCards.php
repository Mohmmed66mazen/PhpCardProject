<?php
use database\DbProvider;

$connection  = DbProvider::getConnection();
$result = mysqli_query($connection,"SELECT * FROM Admin WHERE UserName = \"$admin->username\"  AND  Password = \"$admin->password\"  limit 1");

