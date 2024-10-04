<?php
function gravarProduto($dados) {
    require 'conectaBD.php';

    try {
        $stmt = $pdo->prepare('INSERT INTO produtos (id_produto, cor, tamanho, preco, fornecedor, descricao, estoque, categoria) VALUES (?, ?, ?, ?, ?, ?, ?, ?)');

        $stmt->execute([
            $dados["id_produto"],
            $dados["cor"],
            $dados["tamanho"],
            $dados["preco"],
            $dados["fornecedor"],
            $dados["descricao"],
            $dados["estoque"],
            $dados["categoria"]
        ]);

        return true;
    } catch (PDOException $e) {
        if ($e->getCode() == 23000 && strpos($e->getMessage(), 'id_produto') !== false) {
            return "Este ID de produto já está cadastrado.";
        } else {
            return "Erro ao cadastrar produto: " . $e->getMessage();
        }
    }
}
?>
