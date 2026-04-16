<?php

    // Cabeçalho
    header("Content-Type: application/json");

    $metodo = $_SERVER['REQUEST_METHOD'];

    // echo "Método da requisição: ".$metodo;

    // Recupera o arquivo json na mesma pasta do proejto
    $arquivo = 'usuarios.json';

    // Verifica se o arquivo existe, se nao cria um array vazio
    if (!file_exists($arquivo)) {
        file_put_contents($arquivo, json_encode([], JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
    }

    // Le o conteudo do arquivo json
    $usuarios = json_decode(file_get_contents($arquivo),true);

    // Conteudo
    // $usuarios = [
    //      [ "id" => 1, "nome" => "Ana Clara", "email" => "ana@email.com"],
    //      [ "id" => 2, "nome" => "Byanca", "email" => "byanca@email.com"],
    // ];

    switch  ($metodo) {

        case 'GET':
            // echo "AQUI AÇÕES EM MÉTODO GET";

            echo json_encode($usuarios);

            break;

        case 'POST':
            // echo "AQUI AÇÕES DO MÉTODO POST";

            $dados = json_decode(file_get_contents('php://input'),true);
            // print_r($dados);

            $novoUsuario = [
                "id" => $dados["id"], 
                "nome" => $dados["nome"], 
                "email" => $dados["email"]
            ];

            // adiciona o novo usuario ao array existente
            array_push($usuarios, $novoUsuario);
            echo json_encode('Usuario inserido com sucesso!!');
            print_r($usuarios);

            break;
            
        default:
            echo "MÉTODO NÃO ENCONTRADO!";
            break;
    }


    // // Converte para JSON e retorna
    // echo json_encode($usuarios);

?>
