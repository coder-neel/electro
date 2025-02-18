<?php

class DB
{

    private static $writeDBConnection;
    private static $readDBConnection;

    // DB::Connection - Live Server
    // private static $server = 'sg2nlmysql33plsk.secureserver.net:3306';
    // private static $dbname = 'datacenterx;charset=utf8';
    // private static $user = 'dcx_admin';
    // private static $pass = 'dcx@9095$';

    // DB::Connection - local
    private static $server = 'localhost:3306';
    private static $dbname = 'electro;charset=utf8';
    private static $user = 'root';
    private static $pass = 'qaz@1234';

    public static function connectWriteDB()
    {
        if (self::$writeDBConnection === null) {
            self::$writeDBConnection =  new PDO('mysql:host=' . self::$server . ';dbname=' . self::$dbname, self::$user, self::$pass);
            self::$writeDBConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            self::$writeDBConnection->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);            
        }

        return self::$writeDBConnection;
    }

    public static function connectReadDB()
    {
        if (self::$readDBConnection === null) {
            self::$readDBConnection =  new PDO('mysql:host=' . self::$server . ';dbname=' . self::$dbname, self::$user, self::$pass);
            self::$readDBConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            self::$readDBConnection->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);            
        }

        return self::$readDBConnection;
    }

}
