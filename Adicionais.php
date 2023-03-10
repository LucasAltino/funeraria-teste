<?php 

class Adicionais{
    private $nome;
    private $valor;
    private $descricao;


    public function __construct($nome, $valor,$descricao) {
        $this->nome = $nome;
        $this->valor = $valor;
        $this->descricao = $descricao;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getValor() {

        return $this->valor;
    }

    public function getDescricao() {

        return $this->descricao;
    }
}
