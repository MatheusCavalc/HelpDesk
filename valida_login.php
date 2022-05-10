<?php

    session_start();


    $usuario_autenticado = false;
    $usuario_id = null;
    $usuario_perfil_id = null;

    $perfis = array(1 => 'Administrativo', 2 => 'Usuario');


    //usuarios do sistema
    $usuarios_app = array(
        array('id' => 1, 'email' => 'adm1@teste.com.br', 'password' => '123456', 'perfil_id' => 1),
        array('id' => 2, 'email' => 'adm2@teste.com.br', 'password' => '123456', 'perfil_id' => 1),
        array('id' => 3, 'email' => 'usuario1@teste.com.br', 'password' => '123456', 'perfil_id' => 2),
        array('id' => 4, 'email' => 'usuario2@teste.com.br', 'password' => '123456', 'perfil_id' => 2),
    );


    //verificando se email e password existem nos usuarios do sistema
    foreach ($usuarios_app as $user) {

        if ($user['email'] == $_POST['email'] && $user['password'] ==  $_POST['password']) {
            $usuario_autenticado = true;
            $usuario_id = $user['id'];
            $usuario_perfil_id = $user['perfil_id'];
        } 
    };

    //rotas tomadas com base no $usuario_autenticado
    if ($usuario_autenticado) {
        header('location: home.php');
        $_SESSION['autenticado'] = 'SIM';
        $_SESSION['id'] = $usuario_id;
        $_SESSION['perfil_id'] = $usuario_perfil_id;
    } else {
        header('location: index.php?login=erro');
        $_SESSION['autenticado'] = 'NAO';
    }