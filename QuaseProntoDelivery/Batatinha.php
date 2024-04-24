<?php
class Batatinha extends ItemDoPedido {
    protected $tamanho;

    public function getTamanho() {
        return $this->tamanho;
    }

    public function setTamanho($tamanho) {
        $this->tamanho = $tamanho;
    }
}