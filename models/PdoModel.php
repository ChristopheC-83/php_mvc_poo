<?php

require_once("./models/perso.php");
abstract class PdoModel
{
    public static $pdo;

    protected function setDB()
    {
        if (self::$pdo === null) {
            self::$pdo = new PDO(
                "mysql:host=" . mysql . ";dbname=" . dbname,
                user,
                mdpbd,
                [PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION]
            );
            self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        return self::$pdo;
    }
}
