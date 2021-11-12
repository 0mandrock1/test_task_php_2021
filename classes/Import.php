<?php
require_once (__DIR__.'/DB.php');
class Import
{
    private static $csv_path = __DIR__.'/../resultset.csv';

    public static function import_articles() {
        $db = DB::db_connect();
        if(($handle     =   fopen(self::$csv_path, "r")) !== FALSE){
            while(($row =   fgetcsv($handle)) !== FALSE){
                $db->query('INSERT INTO `articles`(`id`, `section_id`, `section_name`, `title`, `created`) VALUES ("'.$row[0].'","'.$row[1].'","'.$row[2].'","'.$row[3].'","'.$row[4].'")');
            }
            fclose($handle);
        }
    }
    
    public static function import_sections() {
        $db = DB::db_connect();
        if(($handle     =   fopen(self::$csv_path, "r")) !== FALSE){
            while(($row =   fgetcsv($handle)) !== FALSE){
                $db->query('INSERT INTO `sections`(`id`, `name`) VALUES ("'.$row[1].'","'.$row[2].'")');
            }
            fclose($handle);
        }
    }
}