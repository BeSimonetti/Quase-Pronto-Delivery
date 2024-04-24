<?php
class ItemDoPedido{
    protected $tipo;
    
    public function getTipo(){
        return $this->tipo;
    }

    public function setTipo($tipo){
        $this->tipo = $tipo;
    }

}