<?php
//INCLUINDO CONEXÃO
include("conexao.php");

//OBTENDO DADOS (arquivo_pegar_contendo("php://entrada")) 
$obterDados = file_get_contents("php://input");

//EXTRAINDO DADOS DO JSON
$extrair = json_decode($obterDados);

//SEPARANDO DADOS DO JSON
$nome = $extrair->cursos->nome;
$data_nascimento = $extrair->cursos->data_nascimento;
$cpf = $extrair->cursos->cpf;
$email = $extrair->cursos->email;
$celular = $extrair->cursos->celular;
$aceite_termos = $extrair->cursos->aceite_termos;
$id = $extrair->cursos->id;

//SQL
$sql = "UPDATE cursos SET nome = $nome, data_nascimento = $data_nascimento,cpf = $cpf, email = $email, celular = $celular, aceite_termos = $aceite_termos WHERE id=$id";

$executar = $pdo->query($sql);

//EXPORTAR OS DADOS CADASTRADOS
$curso = [
    'nome' => $nome, 
    'data_nascimento' => $data_nascimento,
    'cpf' => $cpf, 
    'email' => $email, 
    'celular' => $celular, 
    'aceite_termos' => $aceite_termos 
];

echo json_encode(['curso'=>$curso]);



?>