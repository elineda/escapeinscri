<?php
/**
 * Created by PhpStorm.
 * User: elineda
 * Date: 3/18/19
 * Time: 12:19 PM
 */

namespace SRC\model;


class Student
{
    public $id;
    public $nom;
    public $prenom;
    public $email;
    public $formation;
    public function __construct($id,$nom,$prenom,$email,$formation){
        $this->formation=$formation;
        $this->prenom=$prenom;
        $this->nom=$nom;
        $this->email=$email;
        $this->id=$id;
    }
}