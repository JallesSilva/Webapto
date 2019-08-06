<?php

namespace App\Lib;

use PDO;
use PDOException;
use Exception;

class Conexao
{
    private static $connection;

    private function __construct(){}

    public static function getConnection() {

        $pdoConfig  = DB_DRIVER . ":". "host=" . DB_HOST . ";";
        $pdoConfig .= "dbname=".DB_NAME.";";

        try { 
            if(!isset(self::$connection)){
                self::$connection =  new PDO($pdoConfig, DB_USER, DB_PASSWORD, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
                self::$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                self::$connection->setAttribute(PDO::ATTR_ORACLE_NULLS, PDO::NULL_EMPTY_STRING);
            }
            return self::$connection;
        } catch (PDOException $e) {
            throw new Exception("Erro de conexão com o banco de dados (Conexao)",500);
        }
    }
}