<?php

//incluir a conexão
    include("conexao.php");

//FEZ A CONEXÃO COM O MYSQL
$sql = "SELECT * FROM semana_da_estatistica";

//"$executar" É CONSULTA PEGANDO A CONEXÃO COM O MYSQL E SELECIONANDO O BANCO DE DADOS "cursos" 
$executar = $pdo ->query($sql);

//Vetor

$cursos = [];

//Índice ´É O INDICADOR DE ONDE PUXAR OS DADOS
$indice = 0;

//Laço
$executar = $executar  ->fetchAll(PDO::FETCH_ASSOC); 

while ($linha = $executar[$indice]) {
    $cursos[$indice]['id'] = $linha['id'];
    $cursos[$indice]['nome']= $linha['nome'];
    $cursos[$indice]['data_nascimento'] = $linha['data_nascimento'];
    $cursos[$indice]['cpf']= $linha['cpf'];
    $cursos[$indice]['email']= $linha['email'];
    $cursos[$indice]['celular']= $linha['celular'];
    $cursos[$indice]['aceite_termos']= $linha['aceite_termos'];
    $cursos[$indice]['presenca']= $linha['presenca'];

    $indice++;
}

//TRANSFORMA VERTO DE CURSO EM JSON
json_encode(['cursos'=> $cursos]);

var_dump($cursos);

?>