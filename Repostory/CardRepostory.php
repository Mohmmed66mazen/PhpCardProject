<?php
require_once __DIR__ . '/../model/Card.php';
require_once __DIR__ . '/../featurs/database/DbProvider.php';
class CardRepostory{

        public static function getById(int $id): ?Card {
        $connection = DbProvider::getConnection();
        $sql = "SELECT * FROM card WHERE Id = ".$id." LIMIT 1";

        $result  = mysqli_query($connection , $sql);
        $card = null;
        if ($row = mysqli_fetch_assoc($result)) {
           
            $card = new Card($row['Id'], $row['Name'], $row['FilePath'], $row['AdminId']);
        }
        
        mysqli_close($connection);
        return $card;
    }
    
    public static function getAll(): array {
        $connection = DbProvider::getConnection();
        $sql = "SELECT * FROM card";
        $result = mysqli_query($connection, $sql);
        $cards = [];

        while ($row = mysqli_fetch_assoc($result)) {
            $cards[] = new Card($row['Id'], $row['Name'], $row['FilePath'] , $row['AdminId']); // Assuming Card constructor matches these fields
        }
        mysqli_close($connection);
        return $cards;
    }



    public static function add(Card $card): bool {
        $connection = DbProvider::getConnection();
        $sql = "INSERT INTO card (Name, FilePath, AdminId) VALUES ('".$card->name."', '".$card->filePath."', ".$card->adminId.")";
        $result = mysqli_query($connection, $sql);
        mysqli_close($connection);
        return $result;
    }
    public static function update(Card $card): bool {
        $connection = DbProvider::getConnection();
        $sql = "UPDATE card SET Name = '".$card->name."', FilePath = '".$card->filePath."', AdminId = ".$card->adminId." WHERE Id = ".$card->id;
        $result = mysqli_query($connection, $sql);
        mysqli_close($connection);
        return $result;
    }
    public static function delete(int $id): bool {
        $connection = DbProvider::getConnection();
        $sql = "DELETE FROM card WHERE Id = ".$id;
        $result = mysqli_query($connection, $sql);
        mysqli_close($connection);
        return $result;
    }
}