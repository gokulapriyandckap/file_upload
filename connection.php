<?php
class Database{
    public $db;

   public function __construct()
   {
       try {
           $this->db = new PDO
           ('mysql:host=127.0.0.1;dbname=files',
           'admin',
           'welcome');
       }
       catch (Exception $e){
           die($e->getMessage().'db didnt conncected');
       }
   }
}
