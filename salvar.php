<?php
    include("config.php"); 
    switch ($_REQUEST["acao"]) {
        case 'cadastrar':
            $nome = $_POST["nome"];
            $codProduto = $_POST["codProduto"];
            $descricao = $_POST["descricao"];
            $preco = $_POST["preco"];

            $sql = "INSERT INTO produtos (nome, codProduto, descricao, preco) 
                VALUES ('{$nome}', '{$codProduto}', '{$descricao}', '{$preco}')";

            $res = $conn->query($sql);

            if($res==true){
                print "<script>alert('Cadastrado com sucesso');</script>";                
                print "<script>location.href='listar.php';</script>";
            }else{
                print "<script>alert()'Erro! Não foi possivel cadastrar!'</script>";
                print "<script>location.href='listar.php';</script>";            
            }

            break;

        case 'editar':
            $nome = $_POST["nome"];
            $codProduto = $_POST["codProduto"];
            $descricao = $_POST["descricao"];
            $preco = $_POST["preco"];

            $sql = "UPDATE produtos SET nome='{$nome}', codProduto='{$codProduto}', descricao='{$descricao}', preco='{$preco}'
                    WHERE codigo=".$_REQUEST["codigo"];

            $res = $conn->query($sql);

            if($res==true){
                print "<script>alert('Editado com sucesso');</script>";                
                print "<script>location.href='listar.php';</script>";
            }else{
                print "<script>alert()'Erro! Não foi possivel editar!'</script>";
                print "<script>location.href='listar.php';</script>";            
            }
            break;

        case 'excluir':

            $sql = "DELETE FROM  produtos WHERE codigo=".$_REQUEST["codigo"];
            
            $res = $conn->query($sql);

            if($res==true){
                print "<script>alert('Excluido com sucesso');</script>";                
                print "<script>location.href='listar.php';</script>";
            }else{
                print "<script>alert()'Erro! Não foi possivel excluir!'</script>";
                print "<script>location.href='listar.php';</script>";            
            }

            break;
    }

    