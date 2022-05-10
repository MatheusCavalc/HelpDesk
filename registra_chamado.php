<?php

    session_start();


    //evitando problemas na construcao do arquivo
    $titulo = str_replace('#', '-', $_POST['titulo']);
    $categoria = str_replace('#', '-', $_POST['categoria']);
    $descricao = str_replace('#', '-', $_POST['descricao']);

    //
    $texto = $_SESSION['id'] . '#' . $titulo . '#' . $categoria . '#' . $descricao . PHP_EOL;
    
    //abertura do arquivo
    $arquivo = fopen('arquivo.hd', 'a');

    //escrevendo o arquivo
    fwrite($arquivo, $texto);

    //fechamento do arquivo
    fclose($arquivo);

    //Redirecionando apos construcao do arquivo (Feedback visual para sucesso com get)
    header('Location: abrir_chamado.php');
