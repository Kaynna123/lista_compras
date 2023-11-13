<?php
require_once "classes/Listas.php";

$lista = new Listas();

$listas = $lista->exibirListas();

if (isset($_GET["id"])){
    $buscar_lista = $lista->buscarLista($_GET["id"]);

var_dump($buscar_lista["descricao"]);
}


?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minhas Lista de Compras</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>

    <header>
        <h1>Minha Lista de Compras</h1>
    </header>

         <!-- adicionar Listas  -->
    <main> 
        <section>
         <h2> Adicionar Listas</h2> 

        <form action="controladores/controlador_lista.php" method="post">
            
            <?php if (isset($_GET["id"])
            ):?>
            <div class="form-group">
                <label for="desc-lista">Descrição da Lista</label> <br>
                <input type="text" name="descricao" id="desc-lista"value="<?=$buscar_lista["descricao"]; ?>" required>
            </div>

            <div class = "form-group">
                <input type="hidden" name="id" value="<?=$buscar_lista["id"]; ?>" required>
                <button type="submit" class="button-add">Alterar</button>

            <?php else: ?>
           
        
            <div class="form-group">
                <label for="desc-lista">Descrição da Lista</label> <br>
                <input type="text" name="descricao" id="desc-lista"  required>
            </div>

            <div class = "form-group">
                <button type="submit" class="button-add">Adicionar</button>
            <?php endif; ?>

            </div class="form-group msg">
            <?php if (isset($_GET["msg"])):?>
            <div class = "agrupar-form msg">
                <h1> <?= $_GET["msg"];?></h1>
            </div>
            
            <?php 
                header("Refresh:2; url= ./");
            endif;
            ?>

        </form>
        </section>

        <section>
         <h2>Minhas Listas:</h2>
        
         <table border="2">
            <thead>
                <tr>
                    <TH>ID</TH>
                    <th>Descrição</th>
                    <th>Ações</th>
                </tr>
            </thead>

            <tbody>
                <?php 
                foreach ($listas as $lista):
                ?>
                <tr>
                    <td class ="id"><?= $lista["id"];?></td>

                    <td class= "descricao"><?= $lista["descricao"];?></td>

                    <td class ="acoes">
                        <a href="./?id=<?= $lista["id"];?>" class = "button-edit">Editar</a>
                        <a href="controladores/controlador_excluir.php?id=<?= $lista["id"];?>" class = "button-delet">Apagar</a>
                </tr>
                <?php endforeach;?>
            </tbody>
         </table>

        </section>
    </main>
            <!-- Fim de adicionar Listas  -->
    <footer>&copy; Kaynnã <?= date("Y") ?></footer>
</body>
</html>
