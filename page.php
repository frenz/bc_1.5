<?php

session_start();
require_once "include/beContent.inc.php";
require_once "include/content.inc.php";

$main = new Skin();

InitGraphic::getInstance()->createGraphic($main);

$content = new Content($pageEntity);
$main->setContent("body", $content->get());
$main->close();  

?>