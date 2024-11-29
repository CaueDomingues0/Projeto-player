<?php

require_once("Item.php");

class Ataque extends Item{

    public function __construct(string $nome, string $classe){
        parent::__construct($nome, $classe);
        $this->setTamanho(7);//Definindo o tamanho padrão da classe Ataque.
    }
}
