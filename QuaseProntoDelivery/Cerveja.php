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
}