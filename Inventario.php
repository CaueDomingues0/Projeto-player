<?php

require_once("Item.php");
require_once("Player.php");

class Inventario {
    private array $item = [];
    private int $capacidadeMax = 20; // Definindo o tamanho padrão da capacidadeMax.
    private int $capacidadeLivre = 20; //Definindo o valor padrão da capacidadeLivre (será usado apenas para comparar com a capacidadeMax).

    public function __construct(int $capacidadeMax = 20) {
        $this->setCapacidadeMax($capacidadeMax);
        $this->setCapacidadeLivre(20);
    }

    //Get e set de Item
    public function getItem(): array {
        return $this->item;
    }

    public function setItem(array $item): void {
            $this->item = $item;
    }
    //Get e set da capacidadeMax
    public function getCapacidadeMax(): int {
        return $this->capacidadeMax;
    }

    public function setCapacidadeMax(int $capacidadeMax): void {
        $this->capacidadeMax = $capacidadeMax;
    }
    //Get e set da capacidadeLivre
    public function getCapacidadeLivre(): int{
        return $this->capacidadeLivre;
    }

    public function setCapacidadeLivre($capacidadeLivre): void{
        $this->capacidadeLivre = $capacidadeLivre;
    }

    public function adicionarItem(Item $itens){ //adiciona os itens no array de itens.
        array_push($this->item, $itens);
        $this->capacidadeLivre -= $itens->getTamanho();//Diminui o valor da capacidade livre de acordo com o tamanho do ítem adicionado.
    } 

    public function removerItem(string $nome){
        foreach($this->item as $index => $item){ // Percorre os ítens do array
            if($item->getNome() == $nome){ // Se o nome do ítem tiver o mesmo nome que o nome inserido.
                unset($this->item[$index]);//Remover o ítem desse nome pelo index.
                $this->capacidadeLivre += $item->getTamanho();//Aumenta o valor da capacidade livre de acordo com o tamanho do item.
                return true;
            }
        }
         return false;
    }
    public function capacidadeLivre(){
        if($this->capacidadeMax >0){ // Caso o valor da capacidadeMax seja maior do que 0.
        return $this->capacidadeLivre; // Retorna o valor da capacidadeLivre.
        }else{
           return "<h1>Inventário cheio!</h1>"; //Caso o contrário, exibirá que o inventário está cheio
        }
    }

}
?>