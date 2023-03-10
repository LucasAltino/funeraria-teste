<?php 

class Funcionario extends Pessoas{

    private $registro;
    private $cargo;
    private $salario;


    public function __construct($nome, $cpf, $idade, $registro, $cargo, $salario) {
        parent::__construct($nome, $cpf, $idade);

        $this->registro = $registro;
        $this->cargo = $cargo;
        $this->salario = $salario;
    }

    public function getregistro() {
        return $this->registro;
    }
    
    public function getcargo() {
        return $this->cargo;
    }

    public function getsalario(){
        return $this->salario;
    }

}

