<?php
/**
 * Created by PhpStorm.
 * User: elineda
 * Date: 3/18/19
 * Time: 12:22 PM
 */

namespace SRC\model;


class DbConnect
{
    protected function dbConnect(){
        require __DIR__ . '/../../indentifiant.php';
        global $error;

        try {
            $bdd = new \PDO("mysql:host=$host;dbname=$dbname", $username, $password);
            return $bdd;

        }

        catch (\PDOException $e){
            $error=$e;
        }


    }


}