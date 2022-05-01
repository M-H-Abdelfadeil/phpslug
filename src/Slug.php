<?php
namespace Abdelfadeil\SlugPhp;

class Slug{

    /**
     * get slug
     * 
     * @param array  $configDB
     * @param string $table
     * @param string $text
     * @param string $separator; 
     * 
     * @return string
     */
    public static  function get_slug(array $configDB ,string $table , string $column ,string $text , string $separator = "-"){
        $slug  = self::handleSlug($text , $separator);
        return   self::slug($configDB,$table,$column,$slug);
    }


     /**
     * handle slug
     * 
     * @param string $text
     * @param string $separator; 
     * 
     * @return string
     */
    public static function handleSlug(string $text , string $separator){
        $text = trim($text);
        $text = mb_strtolower($text, "UTF-8");;
        $text = preg_replace("/[\s-]+/", " ", $text);
        $text = preg_replace("/[\s_]/", $separator, $text);
        return $text;
    }
    
    public  static function slug(array $configDB , string $table , string $column, string $text){
       
        $db = self::database($configDB);
        $stm=" SELECT  ".$column." FROM ".$table ." WHERE ".$column."='$text'";
        $q=$db->conn->prepare($stm);
        $q->execute();
        $data=$q->fetch();
        if($data){
            $text = "0".$text;
           return self::slug($configDB,$table,$column,$text);
        }else{
            return $text;
        }
    }

    /**
     * database
     * 
     * @param array $congig
     * 
     * @return Database
     */
    public static function database(array $configDB){
        $db_host= isset($configDB["db_host"]) ? $configDB["db_host"] : 'localhost' ;
        $db_user= isset($configDB["db_user"]) ? $configDB["db_user"] : 'root' ;
        $db_pass= isset($configDB["db_pass"]) ? $configDB["db_pass"] : '' ;

        $db_name= $configDB["db_name"];
        return  new Database($db_host,$db_name,$db_user,$db_pass);
    }




}
