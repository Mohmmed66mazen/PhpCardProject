<?php

class DbProvider {
    public static function getConnection() {
        $con = mysqli_connect("localhost", "root", "", "mx");
        if (!$con) {
            die("" . mysqli_connect_error());
        }
        return $con;
    }
}

?>