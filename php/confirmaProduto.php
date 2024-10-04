<?php
session_start();

if (!isset($_SESSION["dados_produto"])) {
    header("Location: cadProduto.php");
    exit();
}

$produto = $_SESSION["dados_produto"];

unset($_SESSION["dados_produto"]);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/style_confirma.css">
    <title>Confirmação de Produto</title>
</head>

<body>

    <header>
        <a href="#" class="logo"><i class='bx bx-headphone'></i>Storm Fones</a>
        <ul class="navegação">
            <li><a href="../index.php">Visão geral</a></li>
            <li><a href="../index.php">Sobre nós</a></li>
            <li><a href="../index.php">Contate-nos</a></li>
        </ul>
    </header>

    <section class="confirm-section">
        <h2>Confirmação de Produto Cadastrado</h2>

        <div class="produto-info">
            <h3>Dados do Produto:</h3>
            <p><strong>ID Produto:</strong> <?php echo htmlspecialchars($produto["id_produto"]); ?></p>
            <p><strong>Cor:</strong> <?php echo htmlspecialchars($produto["cor"]); ?></p>
            <p><strong>Tamanho:</strong> <?php echo htmlspecialchars($produto["tamanho"]); ?></p>
            <p><strong>Preço:</strong> R$<?php echo number_format($produto["preco"], 2, ',', '.'); ?></p>
            <p><strong>Fornecedor:</strong> <?php echo htmlspecialchars($produto["fornecedor"]); ?></p>
            <p><strong>Descrição:</strong> <?php echo htmlspecialchars($produto["descricao"]); ?></p>
            <p><strong>Estoque:</strong> <?php echo htmlspecialchars($produto["estoque"]); ?></p>
            <p><strong>Categoria:</strong> <?php echo htmlspecialchars($produto["categoria"]); ?></p>
        </div>

        <div class="actions">
            <a href="cadProduto.php" class="btn">Cadastrar Outro Produto</a>
            <a href="index.php" class="btn">Voltar para a Página Inicial</a>
        </div>
    </section>

</body>

</html>
