
<?php
$currentPage="Produtos";
session_start();
include_once '../common/cabecalho.php';
?>
<body>
    <div class="card">
        <article class="card-body">
            <h4 class="card-title mb-4 mt-1">New Produto</h4>
            <form action="../inserts/insertProduto.php" method="POST" autocomplete="off">
                <div class="form-group">
                    <label for="refProd">Referência</label>
                    <input  class="form-control" type="text" id="refProd" name="refProd"> <br>
                </div>
                <div class="form-group">
                    <label for="descProd">Descrição Produto</label>
                    <input class="form-control" type="text" id="descProd" name="descProd"><br>
                </div>
                <div class="form-group">
                    <label for="uniProd">Unidade Produto</label>
                    <input class="form-control" type="text" id="uniProd" name="uniProd"><br>
                </div>
                <div class="form-group">
                    <label for="famProd">Familia Produto</label>
                    <input class="form-control" type="text" id="famProd" name="famProd"><br>
                </div>
                <div class="form-group">
                    <label for="preco1Prod">Preço1 Produto</label>
                    <input class="form-control" type="text" id="preco1Prod" name="preco1Prod"><br>
                </div>
                <div class="form-group">
                    <label for="preco2Prod">Preço2 Produto</label>
                    <input class="form-control" type="text" id="preco2Prod" name="preco2Prod"><br>
                </div>
                <div class="form-group">
                    <label for="preco3Prod">Preço3 Produto</label>
                    <input class="form-control" type="text" id="preco3Prod" name="preco3Prod"><br>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary btn-block" type="submit" name="submit">Submeter</button>
                </div>
            </form>
        </article>
    </div>
    <?php
     include_once '../common/rodape.php'; 
    ?>
</body>
</html>