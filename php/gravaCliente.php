<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require 'conectaBD.php';

    $dados = [
        "nome" => htmlspecialchars(trim($_POST["nome"])),
        "email" => htmlspecialchars(trim($_POST["email"])),
        "telefone" => htmlspecialchars(trim($_POST["telefone"])),
        "cpf" => htmlspecialchars(trim($_POST["cpf"])),
        "data_nascimento" => htmlspecialchars(trim($_POST["data_nascimento"])),
        "endereco" => htmlspecialchars(trim($_POST["endereco"])),
        "cidade" => htmlspecialchars(trim($_POST["cidade"])),
        "estado" => htmlspecialchars(trim($_POST["estado"])),
        "cep" => htmlspecialchars(trim($_POST["cep"])),
        "senha" => password_hash($_POST["senha"], PASSWORD_DEFAULT)
    ];

    try {
        $sql = "INSERT INTO clientes (nome, email, telefone, cpf, data_nascimento, endereco, cidade, estado, cep, senha) 
                VALUES (:nome, :email, :telefone, :cpf, :data_nascimento, :endereco, :cidade, :estado, :cep, :senha)";
        $stmt = $pdo->prepare($sql);
        
        $stmt->execute($dados);

        header("Location: compra.php");
        exit();
    } catch (PDOException $e) {
        echo "Erro ao cadastrar cliente: " . $e->getMessage();
        exit();
    }
} else {
    echo "Método de requisição inválido.";
    exit();
}
