<?php
/**
 * Created by PhpStorm.
 * User: elineda
 * Date: 3/21/19
 * Time: 9:57 AM
 */

namespace SRC\model;


class Admin extends DbConnect
{

    public function close(){
        $bdd=$this->dbConnect()
            or die('bouam');
        $req=$bdd->prepare('update parametre set val=:val where para=:para');
        $req->execute(array("val"=>0,
                            "para"=>"ouvert"));
        $req->errorInfo();
        return true;
    }
    public function open(){
        $bdd=$this->dbConnect()
        or die('bouam');
        $req=$bdd->prepare('update parametre set val=:val where para=:para');
        $req->execute(array("val"=>1,
            "para"=>"ouvert"));
        $req->errorInfo();
        return true;
    }


}