<?php

require_once("Item.php");

class Defesa extends Item{

    public function __construct(string $nome, string $classe){
        parent::__construct($nome, $classe);
        $this->setTamanho(4);//Definindo o tamanho padrão da classe Defesa.
    }
}
