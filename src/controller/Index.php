<?php



require __DIR__.'/../../vendor/autoload.php';


use SRC\view\IndexView as IndexView;


$index = new IndexView('index');

$index->addBody('truc');
$index->showPage();

