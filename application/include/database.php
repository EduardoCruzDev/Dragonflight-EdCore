<?php
/**
 * @author EduardoCruzDev - Original Version Amin Mahmoudi
 * @copyright Copyright (c) 2024
 * @link https://github.com/EduardoCruzDev/
 **/

use Medoo\Medoo;

class database
{
    public static $auth;
    public static $chars;

    public static function db_connect()
    {
        self::$auth = new Medoo([
            'database_type' => 'mysql',
            'database_name' => get_config('db_auth_dbname'),
            'server' => get_config('db_auth_host'),
            'username' => get_config('db_auth_user'),
            'password' => get_config('db_auth_pass'),
            'charset' => 'utf8',
            'collation' => 'utf8_general_ci',
            'port' => get_config('db_auth_port')
        ]);

        foreach (get_config("realmlists") as $realm) {
            if (!empty($realm["realmid"]) && !empty($realm["db_host"]) && !empty($realm["db_port"]) && !empty($realm["db_user"]) && !empty($realm["db_pass"]) && !empty($realm["db_name"])) {
                self::$chars[$realm["realmid"]] = new Medoo([
                    'database_type' => 'mysql',
                    'database_name' => $realm["db_name"],
                    'server' => $realm["db_host"],
                    'username' => $realm["db_user"],
                    'password' => $realm["db_pass"],
                    'charset' => 'utf8',
                    'collation' => 'utf8_general_ci',
                    'port' => $realm["db_port"]
                ]);
            } else {
                die("Missing char database required field.");
            }
        }
    }
}