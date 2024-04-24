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
            $itemDoPedido = new ItemDoPedido();

            echo "- Comidas -\n";
            echo "Batatinha\n";
            echo "Pizza\n";
            echo "- Bebidas -\n";
            echo "Cerveja\n";
            echo "Refrigerante\n";
            $itemDoPedido->setTipo(readline("Informe o que deseja: "));
            switch($itemDoPedido->getTipo()){
                case "Batatinha":
                    $batatinha = new Batatinha();
                    echo "Tamanho P = 175g";
                    echo "Tamanho M = 225g";
                    echo "Tamanho G = 300g";
                    echo "Tamanho GG = 500g";
                    $batatinha->setTamanho("Tamanho da porção");
                    break;
                case "Pizza":
                    $pizza = new Pizza();
                    echo "Tradicional\n";
                    echo "Especial\n";
                    $pizza->setTipo("Informe o tipo da pizza");
                    echo "Pequena = 20 centímetros 6 pedaços\n";
                    echo "Média = 30 centímetros 8 pedaços\n";
                    echo "Grande = 40 centímetros 12 pedaços\n";
                    $pizza->setTamanho("Informe o tamanho da pizza:");
                    $pizza->setSabor("Informe o sabor da pizza");
                    echo "Cheddar\n";
                    echo "Catupiry\n";
                    echo "Chocolate\n";
                    $pizza->setBorda("Informe o tipo de borda da pizza");
                case "Cerveja":
                    $cerveja = new Cerveja();
                    $cerveja->
            }
            $pedido->addItemDoPedido($itemDoPedido);

            $pedido->addTotal($itemDoPedido->getValor());

            $faturamento->addQtdPizzas();

            $continuar = readline("Algo mais para comer ou beber?");
            if($continuar === ""){
                break;
            }
        }

        $cliente->setNome(readline("Cliente: "));
        $cliente->setContato(readline("Contato: "));
        $pedido->setCliente($cliente);
        $endereco->setBairro(readline("Bairro: "));
        $endereco->setRua(readline("Rua: "));
        $endereco->setRua(readline("Cidade: "));
        $pedido->setDataHoraPedido();

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