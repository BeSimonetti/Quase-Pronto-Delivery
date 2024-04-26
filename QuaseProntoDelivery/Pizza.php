<?php
class Pizza extends ItemDoPedido{
    protected $tamanho;
    protected $sabor;
    protected $borda;

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
        if($this->tamanho === "P"){
            return 50;
        } elseif ($this->tamanho === "M"){
            return 65;
        }elseif($this->tamanho === "G"){
            return 80;
        }
    }
}