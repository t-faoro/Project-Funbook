<?php 

//:: Misc. System Constants
define(HOME_PAGE, 86);
define(NOT_HOME, 0);

//:: Make any required contant declarations
define(CSS_PATH, "./style/");
define(JS_PATH, "./javascript/");
define(IMG, "./images/");

define(DOCTYPE, "<!DOCTYPE html>");
define(TITLE, "Binky");


//:: Include ALL Classes to be used by the Script
include_once "include/connection.class.php";
include_once "include/layout.class.php";
include_once "include/content.class.php";
include_once "include/database.class.php";
include_once "include/slickGallery.class.php";

//:: Other Includes
//include_once "page/page.switch.php";

//:: Misc. Functions
//include_once "functions/customFunctions.php";



?>