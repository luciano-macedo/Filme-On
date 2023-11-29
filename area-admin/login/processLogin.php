<?php
require_once '../../dao/UserDao.php';

$users = UserDao::checkCredentials($_POST['email'], $_POST['senha']);


if($users){
    $auth  = [
        'id' => $users['idUser'],
        'nome' => $users['nomeUser'],
        'email' => $users['emailUser'],
        'img' => $users['imagemUser'],
        'token' => $users['tokenUser']
    ];
        session_start();
        $_SESSION["auth"] = $auth;
        header("Location: ../home");
}else{
        header("Location: login.php?status=erro1");  
}



?>