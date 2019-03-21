<?php



require __DIR__.'/../../vendor/autoload.php';


use SRC\view\IndexView as IndexView;
use SRC\model\Admin as Admin;

if (isset($_SESSION['coa'])&&$_SESSION['coa']==1){
    $_SESSION['coa']=0;
    $index = new IndexView('Connection admin');
    $index->addBody('connect');
    $index->showPage();

}
else{
    $index = new IndexView('Connection admin');

    $index->addBody('connect');
    $index->showPage();
}


