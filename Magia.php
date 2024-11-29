<?php

require_once("Item.php");

class Magia extends Item{

    public function __construct(string $nome, string $classe){
        parent::__construct($nome, $classe);
        $this->setTamanho(2); //Definindo o tamanho padrão da classe Magia.
    }
}
