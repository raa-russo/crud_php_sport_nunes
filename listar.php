<h1>Listar Produtos</h1>
<?php

    $sql = "SELECT * FROM produtos";

    $res = $conn->query($sql);

    $qtd = $res->num_rows;

    if($qtd > 0){
        print "<table class='table table-hover table-striped table-bordered'>";
            print"<tr>";           
            print "<th>ID</th>";
            print "<th>Nome</th>";
            print "<th>Codigo</th>";
            print "<th>Descrição</th>";
            print "<th>Preço</th>";
            print"</tr>";
        while($row = $res->fetch_object()){ 
            print"<tr>";           
            print "<td>".$row->codigo."</td>";
            print "<td>".$row->nome."</td>";
            print "<td>".$row->codProduto."</td>";
            print "<td>".$row->descricao."</td>";
            print "<td>".$row->preco."</td>";
            print "<td>
                    <button onclick=\" location.href='?page=editar&codigo=".$row->codigo."';\" class='btn btn-success'>Editar</button>
                    <button onclick=\"if(confirme('Tem certeza que deseja excluir?')){location.href='?page=salvar&acao=excluir&codigo=".$row->codigo."';}else{false;}\"class='btn btn-danger'>Excluir</button>
                    </td>";
            print"</tr>";
        }
        print "</table>";
    }else{
        print "<p class='alert alert-danger'>Não encontrou resultados!</p>";
    }

?>