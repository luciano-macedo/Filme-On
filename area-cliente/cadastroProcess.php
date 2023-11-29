<?php
 require_once '../dao/ClientDao.php';
 require_once '../model/Client.php';
 require_once '../model/Mensagem.php';

 $client = new Client();
 $msg = new Mensagem();

    //var_dump($_POST);
switch ($_POST["acao"]) {


    case 'ATUALIZAR':
        echo 'Atualizar';
    break;
    case 'SALVAR':
            //pode validar as informações
    $client->setNome($_POST['nome']);
    $client->setCpf($_POST['cpf']);
    $client->setRg($_POST['rg']);
    $client->setNasc($_POST['nasc']);
    $client->setCelular($_POST['cel']);
    $client->setEmail($_POST['email']);
    $client->setPassword($_POST['password']);
    $client->setCep($_POST['cep']);
    $client->setEndereco($_POST['endereco']);
    $client->setImagem($client->salvarImagem($_POST['nomeFoto'])); 
    $client->setToken($client->generateToken());
    try {
      $clientDao = ClientDao::insert($client);
      $msg->setMensagem("Usuário Salvo com sucesso.", "bg-success");
      header("Location: login.php");
    } catch (Exception $e) {
     echo 'Exceção capturada: ',  $e->getMessage(), "\n";
     $msg->setMensagem("Verifique os dados Digitados.", "bg-danger");
     header("Location: cadastro.php");
    } 
    break;
    }

?>