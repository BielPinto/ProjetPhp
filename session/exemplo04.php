<?php
// é  recuperado  antes de seja criado um novo id para atribuir  o conteudo da sessão 
session_id('54q67sihn5becjcpci74s9tn4p');// id da sessão que querermos recuperar
require_once("config.php");


session_regenerate_id();// forca gerar um novo id geralmente usado em arqui. de config. de validação e gerar um novo id
echo session_id();
var_dump($_SESSION);
?>

