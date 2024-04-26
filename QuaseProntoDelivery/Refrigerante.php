<?php
class Refrigerante extends ItemDoPedido {
    protected $tamanho;
    protected $sabor;

    public function getTamanho() {
        return $this->tamanho;
    }

    public function setTamanho($tamanho) {
        $this->tamanho = $tamanho;
    }

    public function getSabor(){
        return $this->sabor;
    }

    public function setSabor($sabor){
        $this->sabor = $sabor;
    }
    public function getValor(){
        if($this->tamanho === "Latinha"){
            return 2.49;
        } elseif ($this->tamanho === "Garrafinha"){
            return 4.99;
        }elseif($this->tamanho === "Dois Litros"){
            return 8.99;
        }elseif($this->tamanho === "Três Litros"){
            return 12.99;
        }
    }
}