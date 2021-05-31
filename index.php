<?php

require_once 'db-connect.php';
$dao=new Conexao();
require_once 'apiFoms.php';
$api=new Forms();
$dados=$dao->select("SHOW COLUMNS FROM dados");
$i=count($dados);


echo $api->frmBegin();
echo $api->getFields($dados,$i,$dao);
echo $api->buttom();
echo $api->frmEnd();






unset($_POST["btnGet"],
$_POST["idAcesso"],
$_POST["idusuarios"],
$_POST["idEstado"]);
//var_dump($_POST);
$dados=$dao->insert($_POST,"estados");


 ?>
