<?php


namespace App;


class App
{
    const DB_NAME = "jobboard";
    const DB_USER = "root";
    const DB_PWD = "root";
    const DB_HOST = "localhost";

    private static $database;
    private static $title;

    public static function getDb(){

        if(self::$database === null){

            self::$database = new database(self::DB_NAME, self::DB_USER, self::DB_PWD, self::DB_HOST);

        }
        return self::$database;
    }


    public static function notFound()
    {
        header("HTTP/1.0 404 NOT FOUND");
        header("Location:index.html?p=404");
    }

    public static function getTitle(){
        return  self::$title;
    }
    public static function setTitle($title){
        self::$title = $title;
    }
}