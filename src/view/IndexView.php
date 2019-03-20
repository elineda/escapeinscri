<?php
/**
 * Created by PhpStorm.
 * User: elineda
 * Date: 3/18/19
 * Time: 11:17 AM
 */

namespace SRC\view;


class IndexView
{
public $title;
public $body;
public $finaltab;
public $grostab;

public function __construct($title)
{
    $this->title=$title;
}

public function addBody($body){
    ob_start();
    include $body.'.php';
    $this->body=ob_get_contents();
    ob_clean();
}

public function showPage(){
    require 'page.php';
}
public function setFinaltab($finaltab){
    $this->finaltab=$finaltab;
}
public function setGrostab($grostab){
    $this->grostab=$grostab;
}
}