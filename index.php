<?php 
//---------------------------------------------------------------------------------

include("Pessoas.php");
include("Adicionais.php");

include("Funcionario.php");
include("Cliente.php");

include("Produtos.php");
include("Servicos.php");

echo "<h1>Funerária Salomão</h1>";

echo "<h4>Serviços</h4>";


$Servico1 = new Servicos("Enterro", 100, "Enterro no cemitério de escolha");
$Servico2 = new Servicos("Cremação", 70, "Não deixa vestígios");
$Servico3 = new Servicos("Maçarico", 1, "Ineficiente, porém barato");

echo "Nome: " . $Servico1->getNome() . " <br>";
echo "Valor: " . $Servico1->getValor() . " <br>";
echo "Descrição: " . $Servico1->getDescricao() . " <br>";

echo "<br>";


echo "Nome: " . $Servico2->getNome() . " <br>";
echo "Valor: " . $Servico2->getValor() . " <br>";
echo "Descrição: " . $Servico2->getDescricao() . " <br>";

echo "<br>";


echo "Nome: " . $Servico3->getNome() . " <br>";
echo "Valor: " . $Servico3->getValor() . " <br>";
echo "Descrição: " . $Servico3->getDescricao() . " <br>";

echo "<hr>";

//---------------------------------------------------------------------------------


echo "<h4>Produtos</h4>";

$produtos = new Produtos("Caixão", 200, "Madeira de Carvalho");
$produto2 = new Produtos("Coroa de Flores", 100, "Coroa de Rosas");
$produto3 = new Produtos("Velas", 20, "Velas Brancas");
$produto4 = new Produtos("Capela", 120, "Capela Jaspe");

echo "Nome: " . $produtos ->getNome() . " <br>";
echo "Valor: " . $produtos->getValor() . " <br>";
echo "Descrição: " . $produtos->getDescricao() . " <br>";

echo "<br>";

echo "Nome: " . $produto2 ->getNome() . " <br>";
echo "Valor: " . $produto2->getValor() . " <br>";
echo "Descrição: " . $produto2->getDescricao() . " <br>";

echo "<br>";

echo "Nome: " . $produto3 ->getNome() . " <br>";
echo "Valor: " . $produto3->getValor() . " <br>";
echo "Descrição: " . $produto3->getDescricao() . " <br>";

echo "<br>";

echo "Nome: " . $produto4 ->getNome() . " <br>";
echo "Valor: " . $produto4->getValor() . " <br>";
echo "Descrição: " . $produto4->getDescricao() . " <br>";

echo "<hr>";


//----------------------------------------------------------------------------------------------------
echo "<h4>Funcionários</h4>";


$funcionario = new Funcionario("Cleiton", "123.123.123.00", "20", 2005, "coveiro", 1.500);

echo "Nome: " . $funcionario->getnome() . " <br>";
echo "Cpf: " . $funcionario->getcpf() . " <br>";
echo "Idade: " . $funcionario->getidade() . " <br>";
echo "Registro: " . $funcionario->getregistro() . " <br>";
echo "Cargo: " . $funcionario->getcargo() . " <br>";
echo "Salario: " . $funcionario->getsalario() . " <br>";

echo "<hr>";


//.......................................................................................................
echo "<h4>Clientes</h4>";


$cliente = new Cliente("Antonella", "456.456.445.88", "32", "17:30");

echo "Nome: " . $cliente->getnome() . " <br>";
echo "Cpf: " . $cliente->getcpf() . " <br>";
echo "Idade: " . $cliente->getidade() . " <br>";
echo "Hora da morte: " . $cliente->gethoramorte() . " <br>";


echo "<hr>";
//......................................................................................