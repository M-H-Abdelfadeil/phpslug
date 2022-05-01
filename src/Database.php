<?php
namespace Abdelfadeil\SlugPhp;
class Database{
    
    public function __construct(string $db_host,string $db_name , string $db_user,string $db_pass){
        try{

            $this->conn=new \PDO("mysql:host=$db_host;dbname=$db_name",$db_user,$db_pass,
            array(
                \PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
                \PDO::ATTR_DEFAULT_FETCH_MODE=>\PDO::FETCH_ASSOC,
                \PDO::ATTR_ERRMODE=>\PDO::ERRMODE_EXCEPTION

            ) 
            );
        }catch(\Exception $e){
            echo $e->getMessage();
            exit();
        }
    
    }
    
}

