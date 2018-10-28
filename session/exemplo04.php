<?php

session_id("urs79vrtrmjglgr9vo9it036tc");
require_once("config.php");


session_regenerate_id();// forca gerar um novo id 
echo session_id();
var_dump($_SESSION);
?>

