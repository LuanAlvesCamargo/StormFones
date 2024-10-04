<?php
session_start();

// Inicializar os arrays de dados e erros
$dados = [
    "id_produto" => "",
    "cor" => "",
    "tamanho" => "",
    "preco" => "",
    "fornecedor" => "",
    "descricao" => "",
    "estoque" => "",
    "categoria" => ""
];

$erros = [
    "id_produto" => "",
    "cor" => "",
    "tamanho" => "",
    "preco" => "",
    "fornecedor" => "",
    "descricao" => "",
    "estoque" => "",
    "categoria" => ""
];

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["id_produto"])) {
        $erros["id_produto"] = "ID do Produto é obrigatório.";
    } else {
        $dados["id_produto"] = htmlspecialchars(trim($_POST["id_produto"]));
    }

    if (empty($_POST["cor"])) {
        $erros["cor"] = "Cor é obrigatória.";
    } else {
        $dados["cor"] = htmlspecialchars(trim($_POST["cor"]));
    }

    if (empty($_POST["tamanho"])) {
        $erros["tamanho"] = "Tamanho é obrigatório.";
    } else {
        $dados["tamanho"] = htmlspecialchars(trim($_POST["tamanho"]));
    }

    if (empty($_POST["preco"])) {
        $erros["preco"] = "Preço é obrigatório.";
    } elseif (!is_numeric($_POST["preco"])) {
        $erros["preco"] = "O preço deve ser numérico.";
    } else {
        $dados["preco"] = number_format((float)$_POST["preco"], 2, '.', '');
    }

    if (empty($_POST["fornecedor"])) {
        $erros["fornecedor"] = "Fornecedor é obrigatório.";
    } else {
        $dados["fornecedor"] = htmlspecialchars(trim($_POST["fornecedor"]));
    }

    if (!empty($_POST["descricao"])) {
        $dados["descricao"] = htmlspecialchars(trim($_POST["descricao"]));
    }

    if (empty($_POST["estoque"])) {
        $erros["estoque"] = "Estoque é obrigatório.";
    } elseif (!filter_var($_POST["estoque"], FILTER_VALIDATE_INT)) {
        $erros["estoque"] = "Estoque deve ser um número inteiro.";
    } else {
        $dados["estoque"] = intval($_POST["estoque"]);
    }

    if (!empty($_POST["categoria"])) {
        $dados["categoria"] = htmlspecialchars(trim($_POST["categoria"]));
    }

    if (!array_filter($erros)) {
        require 'gravaProduto.php';

        $resultado = gravarProduto($dados);

        if ($resultado === true) {
            $_SESSION["dados_produto"] = $dados;
            header("Location: confirmaProduto.php");
            exit();
        } else {
            $erros["geral"] = $resultado;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/style_forms.css">
    <title>Cadastro de Produto</title>
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

    <section class="form-section">
        <h2>Cadastro de Produto</h2>

        <?php if (!empty($erros["geral"])): ?>
            <p class="erro"><?php echo $erros["geral"]; ?></p>
        <?php endif; ?>

        <form action="cadProduto.php" method="post" class="form-produto">
            <!-- ID Produto -->
            <div class="form-group">
                <label for="id_produto">ID Produto:</label>
                <input type="text" id="id_produto" name="id_produto" placeholder="Digite o ID do produto"
                    value="<?php echo htmlspecialchars($dados['id_produto']); ?>" required>
                <span class="erro"><?php echo $erros["id_produto"]; ?></span>
            </div>

            <!-- Cor -->
            <div class="form-group">
                <label for="cor">Cor:</label>
                <input type="text" id="cor" name="cor" placeholder="Digite a cor do produto"
                    value="<?php echo htmlspecialchars($dados['cor']); ?>" required>
                <span class="erro"><?php echo $erros["cor"]; ?></span>
            </div>

            <!-- Tamanho -->
            <div class="form-group">
                <label for="tamanho">Tamanho:</label>
                <input type="text" id="tamanho" name="tamanho" placeholder="Digite o tamanho do produto"
                    value="<?php echo htmlspecialchars($dados['tamanho']); ?>" required>
                <span class="erro"><?php echo $erros["tamanho"]; ?></span>
            </div>

            <!-- Preço -->
            <div class="form-group">
                <label for="preco">Preço:</label>
                <input type="text" id="preco" name="preco" placeholder="Digite o preço do produto"
                    value="<?php echo htmlspecialchars($dados['preco']); ?>" required>
                <span class="erro"><?php echo $erros["preco"]; ?></span>
            </div>

            <!-- Fornecedor -->
            <div class="form-group">
                <label for="fornecedor">Fornecedor:</label>
                <input type="text" id="fornecedor" name="fornecedor" placeholder="Digite o fornecedor"
                    value="<?php echo htmlspecialchars($dados['fornecedor']); ?>" required>
                <span class="erro"><?php echo $erros["fornecedor"]; ?></span>
            </div>

            <!-- Descrição (Opcional) -->
            <div class="form-group">
                <label for="descricao">Descrição:</label>
                <textarea id="descricao" name="descricao" placeholder="Digite a descrição do produto"><?php echo htmlspecialchars($dados['descricao']); ?></textarea>
                <span class="erro"><?php echo $erros["descricao"]; ?></span>
            </div>

            <!-- Estoque -->
            <div class="form-group">
                <label for="estoque">Estoque:</label>
                <input type="number" id="estoque" name="estoque" placeholder="Digite a quantidade em estoque"
                    value="<?php echo htmlspecialchars($dados['estoque']); ?>" required>
                <span class="erro"><?php echo $erros["estoque"]; ?></span>
            </div>

            <!-- Categoria (Opcional) -->
            <div class="form-group">
                <label for="categoria">Categoria:</label>
                <input type="text" id="categoria" name="categoria" placeholder="Digite a categoria do produto"
                    value="<?php echo htmlspecialchars($dados['categoria']); ?>">
                <span class="erro"><?php echo $erros["categoria"]; ?></span>
            </div>

            <button type="submit" class="btn">Cadastrar Produto</button>
        </form>
    </section>

</body>
</html>
