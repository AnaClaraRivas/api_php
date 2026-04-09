<?php

    // Cabeçalho
    header("Content-Type: application/json");

    $metodo = $_SERVER['REQUEST_METHOD'];

    // echo "Método da requisição: ".$metodo;

    switch  ($metodo) {
        case 'GET':
            echo "AQUI AÇÕES EM MÉTODO GET";
            break;
        case 'POST':
            echo "AQUI AÇÕES DO MÉTODO POST";
            break;
        default:
            echo "MÉTODO NÃO ENCONTRADO!";
            break;
    }


    // // Conteudo
    // $usuarios = [
    //     [ "id" => 1, "nome" => "Ana Clara", "email" => "ana@email.com"],
    //     [ "id" => 2, "nome" => "Byanca", "email" => "byanca@email.com"],
    // ];

    // // Converte ára JSON e retorna
    // echo json_encode($usuarios);

?>