<?php
/**
 * Created by PhpStorm.
 * User: elineda
 * Date: 3/18/19
 * Time: 11:02 AM
 */


if (isset($_GET['w'])){
    include __DIR__ . '/src/controller/'.$_GET['w'].'.php';
}
else{
include __DIR__ . '/src/controller/Index.php';
}