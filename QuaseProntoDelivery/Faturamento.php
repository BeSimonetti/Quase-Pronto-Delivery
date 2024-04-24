<?php
class Faturamento{
    private $data;
    private $qtdPizzas = 0;
    private $pedido = [];
    private $totalGeral = 0;
    private $totalMotoboy = 0;
    private $totalLiquido = 0;

    public function getQtdPizzas(){
        return $this->qtdPizzas;
    }

    public function addQtdPizzas(){
        $this->qtdPizzas++;
    }

    public function addPedido($pedido){
        $this->pedido[] = $pedido;
    }

    public function getTotalGeral(){
        return $this->totalGeral;
    }

    public function addTotalGeral($totalGeral){
        $this->totalGeral += $totalGeral;
    }

    public function getTotalMotoboy(){
        return $this->totalMotoboy;
    }

    public function addTotalMotoboy($totalMotoboy){
        $this->totalMotoboy += $totalMotoboy;
    }

    public function getTotalLiquido(){
        return $this->totalLiquido;
    }

    public function setTotalLiquido(){
        $this->totalLiquido = $this->totalGeral - $this->totalMotoboy;
    }

    public function imprimirRelatorio(){}

    public function imprimirPedido($n){
        $pedido[$n-1].imprimir($n);
    }
    
    public function imprimirCabecalho(){}
}