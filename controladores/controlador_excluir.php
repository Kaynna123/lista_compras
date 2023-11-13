<?php
require_once "../classes/Listas.php";
$lista = new Listas();

$excluir = $lista->excluir($_GET["id"]);
    header('location:../?msg=Você Excluiu uma nova lista.');
    exit;
    