<?php
class Batatinha extends ItemDoPedido {
    protected $tamanho;
    protected $tipo = "batatinha";
    public function getTamanho() {
        return $this->tamanho;
    }

    public function setTamanho($tamanho) {
        $this->tamanho = $tamanho;
    }
    public function getTipo() {
        return $this->tipo;
    }

    public function getValor(){
        if($this->tamanho === "P"){
            return 12.99;
        } elseif ($this->tamanho === "M"){
            return 15.99;
        }elseif($this->tamanho === "G"){
            return 19.99;
        }elseif($this->tamanho === "GG"){
            return 29.99;
        }
    }
}