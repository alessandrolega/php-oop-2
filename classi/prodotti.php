<?php 

    class Prodotto{
        public $immagine;
        public $nome;
        public $prezzo;
        public $category;

    public function __construct($immagine, $nome, $prezzo, $category){
        $this->immagine = $immagine;
        $this->nome = $nome;
        $this->prezzo = $prezzo;
        $this->category = $category;

    }
}


?>