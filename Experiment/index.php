<?php 

//:: Error Checking
error_reporting(E_ERROR | E_PARSE | E_WARNING);
//error_reporting(E_ALL);

//:: File where all necessary include and define actions are performed
require_once "config.php";


//:: Instantiation of all Classes
$SlickGallery = new Layout();
$DB = new Database();
$gallery = new SlickGallery();

//:: Instantiate all Content Blocks
$container = new Content();
$headerWrapper = new Content();
$header = new Content();
$footerWrapper = new Content();
$footer = new Content();
$contentWrapper = new Content();
$content = new Content();
$main = new Content();
$side = new Content();


//:: Declare ALL Stylesheets Here
$SlickGallery->addCSS("style.css");
$SlickGallery->addCSS("slickGallery.css");




//:: Declare ALL Javascript Here


//:: Declare all Content Blocks
$container->newBlock("container");
$headerWrapper->newBlock("headerWrap");
$header->newBlock("header");
$content->newBlock("content");
$main->newBlock("main");
$side->newBlock("side");
$contentWrapper->newBlock("contentWrap");
$footerWrapper->newBlock("footerWrap");
$footer->newBlock("footer");



//:: Any site block manipulations here.
$header->add("<h1>I shall name him... ".TITLE."</h1>");



//$test = $DB->select($con, "*", "album");



include "page/page.switch.php";





//:: NO SITE MANIPULATIONS PAST THIS POINT.

//:: Join Blocks

//:: Inner Content Blocks
$headerWrapper->add($header->buildBlock());

$content->add($side->buildBlock());
$content->add($main->buildBlock());
$contentWrapper->add($content->buildBlock());

$footerWrapper->add($footer->buildBlock());

//::Draw the Site Container
$container->add($headerWrapper->buildBlock());
$container->add($contentWrapper->buildBlock());
$container->add($footerWrapper->buildBlock());


//:: Start of Page Declarations
echo $SlickGallery->setPage();
echo $SlickGallery->setHeader(TITLE);
echo $SlickGallery->openBody();


//:: Body Content Goes Here



echo $container->buildBlock();




//:: End of Page Declarations
echo $SlickGallery->closeBody();
echo $SlickGallery->endPage();


?>
