<?php
class Pizza extends ItemDoPedido{
    protected $tamanho;
    protected $sabor;
    protected $borda;
    protected $tipo;

    public function getTamanho(){
        return $this->tamanho;
    }

    public function setTamanho($tamanho){
        $this->tamanho = $tamanho;
    }

    public function getSabor(){
        return $this->sabor;
    }

    public function setSabor($sabor){
        $this->sabor = $sabor;
    }

    public function getborda(){
        return $this->borda;
    }

    public function setborda($borda){
        $this->borda = $borda;
    }

    public function getValor(){
        if($this->tipo === "especial"){
            return 50;
        } elseif ($this->tipo === "tradicional"){
            return 40;
        }
    }
}