<h1>Editar Produtos</h1>
<?php
    $sql = "SELECT * FROM produtos WHERE codigo=".$_REQUEST["codigo"];
    $res = $conn->query($sql);
    $row = $res->fetch_object();
?>
<form action="salvar.php" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php print $row->codigo; ?>">

    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome" value="<?php print $row->nome; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>Codigo</label>
        <input type="number" name="codProduto" value="<?php print $row->codProduto; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>Descrição</label>
        <input type="text" name="descricao" value="<?php print $row->descricao; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>Preco</label>
        <input type="number" name="preco" value="<?php print $row->preco; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>