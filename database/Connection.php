<?php


class Connection
{
    public static function make($config)
    {
        $pdo = new PDO("{$config['connection']};dbname={$config['database']};charset={$config['charset']};",
            $config['username'],
            $config['password']);

        return $pdo;
    }
}