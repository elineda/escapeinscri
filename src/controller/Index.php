<?php



require __DIR__.'/../../vendor/autoload.php';


use SRC\view\IndexView as IndexView;

use SRC\model\Inscription as Inscription;

$inscription= new Inscription();
$para = $inscription->index();

if ($para==1){
    $index = new IndexView('index');

    $index->addBody('truc');
    $index->showPage();
}
else{
    $index=new IndexView('Inscription fermée');
    $index->addBody('close');
    $index->showPage();
}



