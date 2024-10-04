<!DOCTYPE html>

<?php
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];
    $cpf = $_POST["cpf"];
    $endereco = $_POST["endereco"];
    $cidade = $_POST["cidade"];
    $estado = $_POST["estado"];
    $cep = $_POST["cep"];

    $total = 0;

    $produtos = [];
    for ($i = 1; $i <= 12; $i++) {
        $produto = isset($_POST["prod$i"]) ? $_POST["prod$i"] : "";
        $quantidade = isset($_POST["qtd$i"]) ? $_POST["qtd$i"] : 0;
        
        if ($produto != "") {
            $produtos[] = ["nome" => $produto, "quantidade" => $quantidade, "preco" => 99.99];
            $total += 99.99 * $quantidade;
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
    <link rel="stylesheet" href="../styles/style_pagamento.css">
    <title>Pagamento</title>
</head>
<body>

    <header>
        <a href="#" class="logo"><i class='bx bx-headphone'></i>Storm Fones</a>

        <ul class="navegação">
            <li><a href="../index.php">Visão geral</a></li>
            <li><a href="../index.php">Sobre nós</a></li>
            <li><a href="../
            index.php">Contate-nos</a></li>
        </ul>
    </header>

    <section class="payment-section">
        <h2>Forma de Pagamento</h2>
        
        <div class="product-info">
            <h3>Produtos Escolhidos:</h3>
            <ul>
                <?php foreach ($produtos as $produto) { ?>
                    <li><?php echo $produto["nome"]; ?> - R$<?php echo number_format($produto["preco"], 2, ',', '.'); ?> x <?php echo $produto["quantidade"]; ?></li>
                <?php } ?>
            </ul>
        </div>

        <div class="total-info">
            <h3>Total:</h3>
            <p>R$<?php echo number_format($total, 2, ',', '.'); ?></p>
        </div>

        <div class="payment-methods">
            <form action="confirma.php" method="post">
                <input type="hidden" name="nome" value="<?php echo $nome; ?>">
                <input type="hidden" name="email" value="<?php echo $email; ?>">
                <input type="hidden" name="telefone" value="<?php echo $telefone; ?>">
                <input type="hidden" name="cpf" value="<?php echo $cpf; ?>">
                <input type="hidden" name="endereco" value="<?php echo $endereco; ?>">
                <input type="hidden" name="cidade" value="<?php echo $cidade; ?>">
                <input type="hidden" name="estado" value="<?php echo $estado; ?>">
                <input type="hidden" name="cep" value="<?php echo $cep; ?>">
                
                <?php foreach ($produtos as $i => $produto) { ?>
                    <input type="hidden" name="prod<?php echo $i + 1; ?>" value="<?php echo $produto["nome"]; ?>">
                    <input type="hidden" name="qtd<?php echo $i + 1; ?>" value="<?php echo $produto["quantidade"]; ?>">
                <?php } ?>

                <input type="hidden" name="total" value="<?php echo $total; ?>">

                <h3>Selecione a Forma de Pagamento:</h3>
                
                <div class="form-group">
                    <label for="cartao">
                        <input type="radio" id="cartao" name="pagamento" value="cartao" required>
                        Cartão de Crédito
                    </label>
                </div>

                <div class="form-group">
                    <label for="boleto">
                        <input type="radio" id="boleto" name="pagamento" value="boleto" required>
                        Boleto Bancário
                    </label>
                </div>

                <button type="submit" class="btn">Finalizar Pagamento</button>
            </form>
        </div>
    </section>

</body>
</html>
