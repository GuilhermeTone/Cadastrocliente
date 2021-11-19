<?php
//incluindo a conexão com banco de dados
include_once 'conexaodb.php';
//pegando os inputs do html e armazenando em variaveis via post
$nome = $_POST['nome'];
$nasc = $_POST['nasc'];
$cpf = $_POST['cpf'];
$cel = $_POST['cel'];
$email = $_POST['email'];
$end = $_POST['end'];
$obs = $_POST['obs'];

    //Comandos de inserção dos inputs no Banco de dados
    $result = "iNSERT INTO cliente (Nome, Nascimento, CPF, Celular, Email, Endereço, Observação) VALUES (:nome, :nasc, :cpf, :cel, :email, :end, :obs)";
    //variavel $insert puxando a variavel $conn com o comando de prepare que só vai puxar os comandos de inserção da variavel $result quando for chamado
    $insert = $conn->prepare($result);
    //bindParam vincula as variavel ao $insert que só serão chamadas quando for dado o comando execute
    $insert->bindParam(':nome', $nome);
    $insert->bindParam(':nasc', $nasc);
    $insert->bindParam(':cpf', $cpf);
    $insert->bindParam(':cel', $cel);
    $insert->bindParam(':email', $email);
    $insert->bindParam(':end', $end);
    $insert->bindParam(':obs', $obs);
    //comando execute para executar e enviar ao banco de dados os comandos dados no PHP
    //estrutura de decisão para caso haja algum erro aparece na tela, e caso conclua aparece na tela tambem
    if($insert->execute()){
        echo "Cliente Cadastrado com Sucesso";
    }
    else{
        echo "Cliente não conseguiu se cadastrar";
    }
    
?>