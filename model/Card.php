<?php
 class Card{
    
    public $id;
    public $name;
    public $filePath;
    public $adminId ;
    public $fields = [];

    public function __construct($id, $name,$filePath , $adminId, $fields = []) {
        $this->id = $id;
        $this->name = $name;
        $this->filePath = $filePath;
        $this->adminId = $adminId;
        $this->fields = $fields; // Assuming fields is an array of field objects or similar
    }

}