<?php
namespace database\Repostory;

use model\Admin;
use database\DbProvider;

class AdminRepostory {
    public static function getId (Admin $admin): bool|int {

        $connection = DbProvider::getConnection();
       
        $result = mysqli_query($connection,"SELECT * FROM Admin WHERE UserName = \"$admin->username\"  AND  Password = \"$admin->password\"  limit 1");
       
        if($result === false )  return false;
        $row = mysqli_fetch_array($result);
        if($row == false  )  return false;
        mysqli_close( $connection );
        return $row["Id"];
    }

}

?>