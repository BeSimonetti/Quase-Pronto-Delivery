<?php
class Cerveja extends ItemDoPedido{
    protected $tamanho;
    protected $tipo;

    public function getTamanho() {
        return $this->tamanho;
    }

    public function setTamanho($tamanho) {
        $this->tamanho = $tamanho;
    }

    public function getTipo() {
        return $this->tipo;
    }

    public function setTipo($tipo) {
        $this->tipo = $tipo;
    }
    public function getValor(){
        if($this->tamanho === "Latinha"){
            return 3.49;
        } elseif ($this->tamanho === "Latão"){
            return 4.99;
        }elseif($this->tamanho === "Garrafa"){
            return 9.99;
        }elseif($this->tamanho === "Litão"){
            return 12.99;
        }
    }
}