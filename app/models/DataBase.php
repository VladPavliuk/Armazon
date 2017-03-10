<?php

/**
 * Class DataBase return connection to DB
 */
class DataBase
{
    private static $dbParametersPath = DB_PARAMETERS_PATH;

    public static function connect()
    {
        $dbParams = include(static::$dbParametersPath);

        $dbHost = $dbParams['dbHost'];
        $dbName = $dbParams['dbName'];
        $dbUser = $dbParams['dbUser'];
        $dbPassword = $dbParams['dbPassword'];

        $db = new PDO("mysql:host={$dbHost};dbname={$dbName}", $dbUser, $dbPassword);

        $db->exec("set names utf8");

        return $db;
    }
}