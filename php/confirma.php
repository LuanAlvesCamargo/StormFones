<?php
session_start();

$nome = $_SESSION["nome"];
$email = $_SESSION["email"];
$telefone = $_SESSION["telefone"];
$cpf = $_SESSION["cpf"];
$endereco = $_SESSION["endereco"];
$cidade = $_SESSION["cidade"];
$estado = $_SESSION["estado"];
$cep = $_SESSION["cep"];

$total = $_POST["total"]; 
$produtos = [];
for ($i = 1; $i <= 12; $i++) {
    $produto = isset($_POST["prod$i"]) ? $_POST["prod$i"] : "";
    $quantidade = isset($_POST["qtd$i"]) ? $_POST["qtd$i"] : 0;
    
    if ($produto != "") {
        $produtos[] = ["nome" => $produto, "quantidade" => $quantidade, "preco" => 99.99];
    }
}
?>


<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../styles/style_confirma.css">
    <title>Confirmação de Pedido</title>
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
        <h2>Confirmação de Pedido</h2>

        <div class="cliente-info">
            <h3>Dados do Cliente:</h3>
            <p><strong>Nome:</strong> <?php echo htmlspecialchars($nome); ?></p>
            <p><strong>E-mail:</strong> <?php echo htmlspecialchars($email); ?></p>
            <p><strong>Telefone:</strong> <?php echo htmlspecialchars($telefone); ?></p>
            <p><strong>CPF:</strong> <?php echo htmlspecialchars($cpf); ?></p>
            <p><strong>Endereço:</strong> <?php echo htmlspecialchars($endereco . ", " . $cidade . ", " . $estado . " - CEP: " . $cep); ?></p>
        </div>

        <div class="product-info">
            <h3>Produtos Escolhidos:</h3>
            <ul>
                <?php foreach ($produtos as $produto) { ?>
                    <li><?php echo htmlspecialchars($produto["nome"]); ?> - R$<?php echo number_format($produto["preco"], 2, ',', '.'); ?> x <?php echo $produto["quantidade"]; ?></li>
                <?php } ?>
            </ul>
        </div>

        <div class="total-info">
            <h3>Total:</h3>
            <p>R$<?php echo number_format($total, 2, ',', '.'); ?></p>
        </div>
    </section>

</body>
</html>
