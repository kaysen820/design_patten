<?php
header('Content-Type:text/html;charset=utf-8');
/*
 * 享元模式【做网站】
 * Author: Kaysen
 */
define('ROOT_PATH', dirname(__FILE__));
require_once ROOT_PATH . '/../../Loader.php';


###########################################################

$f = new WebSiteFactory();

$fx = $f->getWebSiteCategory('产品展示');
$fx->webuse(new User('徐建涛'));

$fx = $f->getWebSiteCategory('产品展示');
$fx->webuse(new User('小菜'));

$fx = $f->getWebSiteCategory('博客');
$fx->webuse(new User('Kaysen'));

echo $f->getWebSiteCount();

