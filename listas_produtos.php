<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minhas Lista de Compras</title>
    <link rel="stylesheet" href="css/estilo_listas_produtos.css">
</head>
<body>

    <header>
        <h1>Minha Lista de Compras</h1>
    </header>

         <!-- adicionar Itens  -->
    <main> 
        <section>
         <h2> Adicionar Items</h2> 

        <form action="">
            <div class="form-group">
                <label for="desc-lista">Descrição do Items</label> <br>
                <input type="text" name="descricao" id="desc-lista">
            </div>

            <div class="form-group">
                <label for="desc-lista">Qtd:</label> <br>
                <input type="text" name="descricao-qtd" id="desc-qtd">
            </div>

            <div class="form-group">
                <label for="desc-lista">Valor do Item</label> <br>
                <input type="text" name="descricao-item" id="desc-item">
            </div>

            <div class = "form-group">
                <button type="submit" class="button-add">Adicionar</button>
            </div>

        </form>
        </section>

        <section>
         <h2>Meus Items:</h2>
        
         <table border="2">
            <thead>
                <tr>
                    <TH>ID</TH>
                    <th>Descrição</th>
                    <th>Qtd</th>
                    <TH>valor</TH>
                    <th>Total</th>
                    <th>Ações</th>
                </tr>   
            </thead>

            <tbody>
                <tr>
                    <td class ="id">1</td>
                    <td class= "descricao">Leite</td>
                    <td>1</td>
                    <td>6.00</td>
                    <td>6.00</td>
                    <td class ="acoes">
                        <button class = "button-edit">Editar</button>
                        <button class = "button-delet">Apagar</button>
                    </td>
                </tr>
            </tbody>
         </table>

        </section>
    </main>
            <!-- Fim de adicionar Itens  -->
    <footer>&copy; Kaynnã <?= date("Y") ?></footer>
</body>
</html>
