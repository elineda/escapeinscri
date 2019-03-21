<?php
/**
 * Created by PhpStorm.
 * User: elineda
 * Date: 3/18/19
 * Time: 11:52 AM
 */



require __DIR__.'/../../vendor/autoload.php';


use SRC\view\IndexView as IndexView;
use SRC\model\Inscription as Inscription;


if (isset($_POST['nom'])&&isset($_POST['prenom'])&&isset($_POST['email'])&&isset($_POST['formation'])){

    $inscription=new Inscription();
    $go=$inscription->add($_POST['nom'],$_POST['prenom'],$_POST['email'],$_POST['formation']);
    if ($go){
        $index= new IndexView('success');
        $index->addBody('success');
        $index->showPage();

    }
    else{
        $index=new IndexView('Erreur');
        $index->addBody('erreur');
        $index->showPage();
    }



}

else{



    $index = new IndexView('Erreur');

    $index->addBody('erreur');
    $index->showPage();
}