<?php
    require "conf/Conexao.php";
    $pdo = basicConnection();

    $k = isset($_GET['k']) ? $_GET['k'] : '';

    if($k == "gado"){
        $nome = isset($_POST['nome']) ? $_POST['nome'] : '';
        $idade = isset($_POST['idade']) ? $_POST['idade'] : '';
        $peso = isset($_POST['peso']) ? $_POST['peso'] : '';
        $raca = isset($_POST['raca']) ? $_POST['raca'] : '';
        $criador = isset($_POST['criador']) ? $_POST['criador'] : ''; 

        // já temos todas as informações necessárias para realizar a inserção do novo animal

        $stmt = $pdo->prepare('INSERT INTO gado (nome,idade,peso,raca_codigo,criador_codigo) 
                                VALUES(:nome,:idade,:peso,:raca,:criador);');
        $stmt->bindParam(':nome',$nome);
        $stmt->bindParam(':idade',$idade);               
        $stmt->bindParam(':peso',$peso);
        $stmt->bindParam(':raca',$raca);
        $stmt->bindParam(':criador',$criador);
        $stmt->execute();
        header('Location: listar.php?k=gado');
    }else if($k == "veterinario"){

        $nome = isset($_POST['nome']) ? $_POST['nome'] : '';
        $crmv = isset($_POST['crmv']) ? $_POST['crmv'] : '';
        $telefone = isset($_POST['tel']) ? $_POST['tel'] : '';

        $stmt = $pdo->prepare('INSERT INTO veterinario (nome,crmv,telefone) 
                                VALUES(:nome,:crmv,:telefone);');
        $stmt->bindParam(':nome',$nome);
        $stmt->bindParam(':crmv',$crmv);               
        $stmt->bindParam(':telefone',$telefone);
        $stmt->execute();
        header('Location: listar.php?k=veterinario');

    }else if($k == "raca"){
        $nome = isset($_POST['nome']) ? $_POST['nome'] : '';
        $stmt = $pdo->prepare('INSERT INTO raca (nome) 
                                VALUES(:nome);');
        $stmt->bindParam(':nome',$nome);
        $stmt->execute();
        header('Location: listar.php?k=raca');

    }else if($k == "criador"){
        $nome = isset($_POST['nome']) ? $_POST['nome'] : '';
        $nomePropriedade = isset($_POST['nomePropriedade']) ? $_POST['nomePropriedade'] : '';
        $stmt = $pdo->prepare('INSERT INTO criador (nome,nomePropriedade) 
                                VALUES(:nome,:nomePropriedade);');
        $stmt->bindParam(':nome',$nome);
        $stmt->bindParam(':nomePropriedade',$nomePropriedade);
        $stmt->execute();
        header('Location: listar.php?k=criador');
    }
    // $stmt = $pdo->prepare('INSERT INTO veterinario (nome,crmv,telefone) VALUES(:nome,:crmv,:tel);');
    // $stmt->bindParam(':nome',$nome);
    // $stmt->bindParam(':crmv',$crmv);               código de inserção
    // $stmt->bindParam(':tel',$tel);
    // $stmt->execute(); 

?>		
        
