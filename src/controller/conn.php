<?php



require __DIR__.'/../../vendor/autoload.php';


use SRC\view\IndexView as IndexView;
use SRC\model\Inscription as Inscription;

$inscription = new Inscription();
$log=$inscription->connect($_POST['email'],$_POST['password']);

if ($log['pass']==$_POST['password']){
    $_SESSION['coa']=1;
    $index=new IndexView("Panneau d'admin");
    $index->addBody('admin');
    $index->showPage();
}
else{
    $_SESSION['coa']=0;
    $index=new IndexView('erreur');
    $index->addBody('erreur');
    $index->showPage();
}






