CREATE DATABASE IF NOT EXISTS storm_fones;
USE storm_fones;

CREATE TABLE IF NOT EXISTS clientes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    telefone VARCHAR(20) NOT NULL,
    cpf VARCHAR(14) NOT NULL UNIQUE,
    data_nascimento DATE NOT NULL,
    endereco VARCHAR(255) NOT NULL,
    cidade VARCHAR(100) NOT NULL,
    estado VARCHAR(50) NOT NULL,
    cep VARCHAR(10) NOT NULL,
    senha VARCHAR(255) NOT NULL,
    criado_em TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS produtos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_produto VARCHAR(50) NOT NULL UNIQUE,
    cor VARCHAR(50) NOT NULL,
    tamanho VARCHAR(50) NOT NULL,
    preco DECIMAL(10,2) NOT NULL,
    fornecedor VARCHAR(255) NOT NULL,
    descricao TEXT,
    estoque INT DEFAULT 0,
    categoria VARCHAR(100),
    criado_em TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
