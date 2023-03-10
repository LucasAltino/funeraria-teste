<?php 

class Pessoas{
    private $nome;
    private $cpf;
    private $idade;


    public function __construct($nome, $cpf, $idade) {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->idade = $idade;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getCpf() {
        return $this->cpf;
    }

    public function getIdade() {
        return $this->idade;
    }
    
}