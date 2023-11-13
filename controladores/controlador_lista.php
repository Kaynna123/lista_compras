<?php
require_once "../classes/Listas.php";
$lista = new Listas();
$limpar_espacos = trim($_POST["descricao"]);
$contar_caracteres = strlen($limpar_espacos);

if(isset($_POST["id"])) {
    if ($contar_caracteres >=5) {
        $inserir = $lista->alterar($_POST["descricao"], $_POST["id"]);
        echo "Voce alterou uma lista";

    } 
    header('location:../?id=' . $_POST["id"]);
    exit;
}

if ($contar_caracteres >=5) {
    $inserir = $lista->criarListas($_POST["descricao"]);
    echo "Voce cadastrou uma nova lista";
    header('location:../?msg=Você cadastrou uma nova lista.');
    exit;
}
else {
    header ('location: ../?msg=digite mais caracteres');
exit;
}
header('location:../');