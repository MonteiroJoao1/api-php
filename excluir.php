<?php
//INCLUINDO CONEXÃO
include("conexao.php");

//OBTENDO DADOS (arquivo_pegar_contendo("php://entrada")) 
$obterDados = file_get_contents("php://input");

//EXTRAINDO DADOS DO JSON
$extrair = json_decode($obterDados);

//SEPARANDO DADOS DO JSON
$id = $extrair->cursos->id;   

//SQL
$sql = "DELETE FROM semana_da_estatistica WHERE id=$id";
$executar = $pdo ->query($sql);

?>