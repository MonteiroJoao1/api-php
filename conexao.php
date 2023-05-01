<?php 

    //VAIRAVEIS DE ACESSO 
    $url = "aws.connect.psdb.cloud";
    $usuario = "cv8xpjjzd46su5zf8wcj";
    $senha = "pscale_pw_i43i1eRjeqNcjtzYt7MLpsiXsmWYu93agSXDZAl1NLi";
    $base = "semana_da_estatistica";
    
    //CAMINHO PARA O CERTIFICADO 
    $ssl_ca = "cacert-2023-01-10.pem";

    //OPÕES ADICIONAIS 
    $options = array(
        PDO::MYSQL_ATTR_SSL_VERIFY_SERVER_CERT => TRUE, // verificação do certificado SSL do servidor
        PDO::MYSQL_ATTR_SSL_CA => $ssl_ca // caminho para o certificado SSL do cliente
    );

    //CONEXÃO
    try {
        $dsn = "mysql:host=$url;dbname=$base;charset=utf8mb4";
        $pdo = new PDO($dsn, $usuario, $senha, $options);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Conexão bem sucedida!";
    } catch (PDOException $e) {
        echo "Erro ao conectar: " . $e->getMessage();
    }


?>