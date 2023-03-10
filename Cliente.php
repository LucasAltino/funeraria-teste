<?php 

class Cliente extends Pessoas{

    private $horaMorte;

    public function __construct($nome, $cpf, $idade, $horaMorte) {
        parent::__construct($nome, $cpf, $idade);

        $this->horaMorte = $horaMorte;
    }

    public function gethoraMorte() {
        return $this->horaMorte;
    }
}