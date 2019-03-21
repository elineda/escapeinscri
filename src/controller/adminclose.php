<?php



require __DIR__.'/../../vendor/autoload.php';


use SRC\view\IndexView as IndexView;
use SRC\model\Admin as Admin;

if (isset($_SESSION['coa'])&&$_SESSION['coa']==1){
    $admin=new Admin;
    $req=$admin->close();
    $index=new IndexView("Panneau d'admin");
    $index->addBody('admin');
    $index->showPage();
}
else{
    $index = new IndexView('Connection admin');

    $index->addBody('connect');
    $index->showPage();
}


