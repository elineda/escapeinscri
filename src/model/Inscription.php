<?php
/**
 * Created by PhpStorm.
 * User: elineda
 * Date: 3/18/19
 * Time: 12:10 PM
 */

namespace SRC\model;

use SRC\model\Student as Student;


class Inscription extends DbConnect
{
    /**
     * @param $nom
     * @param $prenom
     * @param $email
     * @param $formation
     * @return array
     * on inscrit les joueurs
     */
    public function add($nom,$prenom,$email,$formation){
        $bdd=$this->dbConnect()
            or die('connection impossible');
        $req=$bdd->prepare('INSERT INTO student (nom, prenom, email, formation)'.'values (:nom,:prenom,:email,:formation)');
        $req->execute(array('nom'=>''.$nom,
                            'prenom'=>''.$prenom,
                            'email'=>''.$email,
                            'formation'=>''.$formation,
                            ));

        return $req->errorInfo();
    }

    /**
     * @return false|string
     * On tri les joueurs
     */
    public function tri(){
        $bdd=$this->dbConnect()
            or die('bam');
        $tabDTA=[];
        $tabFISE=[];
        $tabCITISE=[];
        $tabFISA=[];
        $tabIPSI=[];
        $tabDUSMW=[];
        $tabL3INFO=[];
        $tabM1DC=[];
        $tabmel=[];
        $finaltab=[];
        $i=0;
        $req1=$bdd->query('select * from student');
        //Tri des joueurs selon la formation
        while($row=$req1->fetch()){
            $student=new Student($row['id'],$row['nom'],$row['prenom'],$row['email'],$row['formation']);
            if ($student->formation==="DTA"){
                array_push($tabDTA,$student);
            }
            elseif ($student->formation==="FISE"){
                array_push($tabFISE,$student);
            }
            elseif ($student->formation==="FISA"){
                array_push($tabFISA,$student);
            }
            elseif ($student->formation==="CITISE"){
                array_push($tabCITISE,$student);
            }
            elseif ($student->formation==="IPSI"){
                array_push($tabIPSI,$student);
            }
            elseif ($student->formation==="DUSMW"){
                array_push($tabDUSMW,$student);
            }
            elseif ($student->formation==="L3INFO"){
                array_push($tabL3INFO,$student);
            }
            elseif ($student->formation==="M1DC"){
                array_push($tabM1DC,$student);
            }
            $i++;
        }
        //calul du tableau le plus gros
        $taille=0;
        array_push($tabmel,$tabFISE);
        array_push($tabmel,$tabDTA);
        array_push($tabmel,$tabCITISE);
        array_push($tabmel,$tabFISA);
        array_push($tabmel,$tabIPSI);
        array_push($tabmel,$tabDUSMW);
        array_push($tabmel,$tabL3INFO);
        array_push($tabmel,$tabM1DC);
        foreach ($tabmel as $row){
            if (sizeof($row)>$taille){
                $taille=sizeof($row);
            }

        }
        //melange des joueurs dans un tableau global
        for ($k=0;$k<$taille;$k++){
            if (isset($tabFISE[$k])){
                array_push($finaltab,$tabFISE[$k]);
            }
            if (isset($tabIPSI[$k])){
                array_push($finaltab,$tabIPSI[$k]);
            }
            if (isset($tabFISA[$k])){
                array_push($finaltab,$tabFISA[$k]);
            }
            if (isset($tabCITISE[$k])){
                array_push($finaltab,$tabCITISE[$k]);
            }
            if (isset($tabDTA[$k])){
                array_push($finaltab,$tabDTA[$k]);
            }
            if (isset($tabDUSMW[$k])){
                array_push($finaltab,$tabDUSMW[$k]);
            }
            if (isset($tabL3INFO[$k])){
                array_push($finaltab,$tabL3INFO[$k]);
            }
            if (isset($tabM1DC[$k])){
                array_push($finaltab,$tabM1DC[$k]);
            }
        }
        //assignation des équipes.
        $equipe=1;
        $p=0;
        $z=0;
        for ($q=0;$q<sizeof($finaltab);$q++){
            if ($p<5) {
                $string=$equipe;
                $req2 = $bdd->prepare('update student set equipe=:equipe where id=:id');
                $req2->execute(array('id' => $finaltab[$q]->id,
                    'equipe' => $string));
                $p++;
            }
            else{
                $equipe++;
                $string=$equipe;
                $req2 = $bdd->prepare('update student set equipe=:equipe where id=:id');
                $req2->execute(array('id' => $finaltab[$q]->id,
                    'equipe' => $string));
                $p=1;
            }
            $z++;
        }
        $json=json_encode($finaltab);
        return $json;


    }

    /**
     * @return array
     * Montre les équipes
     */
    public function showTeam(){
        $bdd=$this->dbConnect()
        or die('bam');
        $grostab=[];
        $req1=$bdd->query('select distinct equipe from student order by equipe asc ');
        while ($row=$req1->fetch()){
            $equipe=$row['equipe'];
            $tabequipe=[];
            $req2=$bdd->query('select * from student where equipe='.$equipe);
            while ($row2=$req2->fetch()){
                array_push($tabequipe,$row2);
            }
            array_push($grostab,$tabequipe);
        }
        return $grostab;
    }
}