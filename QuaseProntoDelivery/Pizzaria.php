<?php

include "Faturamento.php";
include "Cliente.php";
include "Endereco.php";
include "Pedido.php";
include "ItemDoPedido.php";
include "Pizza.php";
include "Refrigerante.php";
include "Batatinha.php";
include "Cerveja.php";
include "Avaliacao.php";



$faturamento = new Faturamento();

/*
$pizza = new Pizza();
$batatinha = new Batatinha();
$cerveja = new Cerveja();
$refrigerante = new Refrigerante();
$avaliacao = new Avaliacao();
*/

echo "Bem vindo a pizzaria!\n";

while(true){
    echo "Selecione:\n";
    echo "1.Pedido\n";
    echo "2.Imprimir histórico\n";
    echo "3.Imprimir pedido\n";
    echo "#.Sair\n";
    $menu = readline();

    if($menu === "#"){
        break;
    }
    else if($menu === "1"){
        $pedido = new Pedido();
        $cliente = new Cliente();
        $endereco = new Endereco();

        while(true){
            echo "- Comidas -\n";
            echo "1. Batatinha\n";
            echo "2. Pizza\n";
            echo "- Bebidas -\n";
            echo "3. Cerveja\n";
            echo "4. Refrigerante\n";
            $item = readline();
            switch($item){
                case "1":
                    $batatinha = new Batatinha();
                    echo "Tamanho P = 175g\n";
                    echo "Tamanho M = 225g\n";
                    echo "Tamanho G = 300g\n";
                    echo "Tamanho GG = 500g\n";
                    $batatinha->setTamanho(readline("Tamanho da porção: "));
                    $pedido->addItemDoPedido($batatinha);
                    $pedido->addTotal($batatinha->getValor());
                    break;
                case "2":
                    $pizza = new Pizza();
                    echo "P = 20 centímetros 6 pedaços\n";
                    echo "M = 30 centímetros 8 pedaços\n";
                    echo "G = 40 centímetros 12 pedaços\n";
                    $pizza->setTamanho(readline("Informe o tamanho da pizza: "));
                    $pizza->setSabor(readline("Informe o sabor da pizza: "));
                    echo "Cheddar\n";
                    echo "Catupiry\n";
                    echo "Chocolate\n";
                    $pizza->setBorda(readline("Informe o tipo de borda da pizza: "));
                    $pedido->addItemDoPedido($pizza);
                    break;
                    $pedido->addTotal($pizza->getValor());
                case "3":
                    $cerveja = new Cerveja();
                    $cerveja->setTamanho(readline("Informe o tamanho da cerveja: "));
                    $cerveja->setTipo(readline("Informe a marca da cerveja: "));
                    $pedido->addItemDoPedido($cerveja);
                    $pedido->addTotal($cerveja->getValor());        
                    break;
                case "4":
                    $refrigerante = new Refrigerante();
                    $refrigerante->setTamanho(readline("Informe o tamanho: "));
                    $refrigerante->setSabor(readline("Informe o sabor que deseja: "));
                    $pedido->addItemDoPedido($refrigerante);
                    $pedido->addTotal($refrigerante->getValor());
            }

            $continuar = readline("Algo mais para comer ou beber?");
            if($continuar === ""){
                break;
            }
        }

        $cliente = new Cliente();
        $cliente->setNome(readline("Cliente: "));
        $cliente->setContato(readline("Contato: "));
        $pedido->setCliente($cliente);

        $endereco = new Endereco();
        $endereco->setRua(readline("Rua: "));
        $endereco->setBairro(readline("Bairro: "));
        $endereco->setCidade(readline("Cidade: "));
        echo "\n";
        $pedido->setEndereco($endereco);

        $pedido->setTaxaEntrega($endereco->getBairro());
        $pedido->addTotal($pedido->getTaxaEntrega());

        $faturamento->addPedido($pedido);
        $faturamento->addTotalMotoboy($pedido->getTaxaEntrega());
        $faturamento->addTotalGeral($pedido->getTotal());
        $faturamento->setTotalLiquido();

    }
    else if($menu === "2"){
        $faturamento->imprimirCabecalho();
        $faturamento->imprimirRelatorio();
    }
    else if($menu === "3"){
        echo "Qual pedido: \n";
        $pedido = readline();
        $faturamento->imprimirCabecalho();
        $faturamento->imprimirPedido($pedido);
    }
}