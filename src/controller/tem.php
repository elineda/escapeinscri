<?php
/**
 * Created by PhpStorm.
 * User: elineda
 * Date: 3/18/19
 * Time: 3:35 PM
 */

require __DIR__.'/../../vendor/autoload.php';


use SRC\view\IndexView as IndexView;
use SRC\model\Inscription as Inscription;

$inscription=new Inscription();
$grostab=$inscription->showTeam();
$vue=new IndexView('liste des equipe');
$vue->setGrostab($grostab);
$vue->addBody('liste');
$vue->showPage();
//header('Content-type: application/json');
//echo $json;