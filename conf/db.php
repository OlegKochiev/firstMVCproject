<?php
/**
 *
 * DB: database configuration
 * 
 */
class DB
{
    const USER = "root";
    const PASS = '';
    const HOST = 'localhost';
    const DB = 'cabinet';

    public static function connection_to_DB(){
        $user = self::USER;
        $pass = self::PASS;
        $host = self::HOST;
        $db = self::DB;
        $conn = new PDO(
            "mysql:dbname=$db;host=$host", 
            $user, 
            $pass
        );
        return $conn;   
    }
} 