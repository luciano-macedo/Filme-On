<?php
require_once '../dao/ClientDao.php';

$client = ClientDao::checkCredentials($_POST['email'], $_POST['senha']);


if($client){
    $authClient = [
        'id' => $client['idClient'],
        'nome' => $client['nomeClient'],
        'email' => $client['emailClient'],
        'img' => $client['imagemClient'],
        'token' => $client['tokenClient']
    ];
        session_start();
        $_SESSION["authClient"] = $authClient;
        header("Location: home.php");
}else{
        header("Location: login.php?status=erro1");  
}



?>