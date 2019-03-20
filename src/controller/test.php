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
$json=$inscription->tri();

echo "<script>window.location.replace('/untitled1/index.php?w=tem')</script>";