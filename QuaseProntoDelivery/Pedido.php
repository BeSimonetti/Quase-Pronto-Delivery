<?php
class Pedido{
    private $total = 0;
    private $taxaEntrega;
    private $dataHoraPedido;
    private $cliente;
    private $itemDoPedido = [];

    public function getTotal() {
        return $this->total;
    }

    public function addTotal($total) {
        $this->total += $total;
    }

    public function getTaxaEntrega() {
        return $this->taxaEntrega;
    }

    public function setTaxaEntrega($bairro) {
        if($bairro === "centro"){
            return 10;
        }
        elseif($bairro === "periferia"){
            return 15;
        }
        else{
            return 20;
        }
    }

    public function setCliente($cliente) {
        $this->cliente = $cliente;
    }

    public function getDataHoraPedido() {
        return $this->dataHoraPedido;
    }

    public function setDataHoraPedido() {
        $this->dataHoraPedido = date("d/m/Y H:i:s");
    }

    public function addItemDoPedido($itensDoPedido) {
        $this->itemDoPedido[] = $itensDoPedido;
    }

    public function imprimir($n){
        echo "Pedido nº: $n";
        echo $this->formatar("Cliente", $this->cliente->nome);
        echo $this->formatar("Contato", $this->cliente->contato);
        for($i = 0; $i < count($this->itemDoPedido); $i++){
            echo $this->formatar("", $this->itemDoPedido[$i]->getTipo()." ".$this->itemDoPedido[$i]->getSabor()." ".strval($this->itemDoPedido[$i]->getValor()))."\n";
        }
        echo "----------------------------------------";
    }

    public function formatar($titulo, $valor) {
       $divisoria = "----------------------------------------";
       $finalDiv = strlen($divisoria)-1;
       $finalValor = strlen($titulo) + strlen($valor)-1;
       while($finalDiv !== $finalValor && strlen($valor) < strlen($divisoria)){
        $valor = " " + $valor;
        $finalValor = strlen($titulo) + strlen($valor)-1;
       }
       return $titulo + $valor;
    }
}