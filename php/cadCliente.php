<?php
session_start();

$erro_nome = $erro_email = $erro_telefone = $erro_cpf = $erro_senha = $erro_data_nascimento = $erro_endereco = $erro_cidade = $erro_estado = $erro_cep = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["nome"])) {
        $erro_nome = "Nome é obrigatório.";
    } else {
        $_SESSION["nome"] = htmlspecialchars($_POST["nome"]);
    }

    if (empty($_POST["email"])) {
        $erro_email = "E-mail é obrigatório.";
    } elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $erro_email = "Formato de e-mail inválido.";
    } else {
        $_SESSION["email"] = htmlspecialchars($_POST["email"]);
    }

    if (empty($_POST["telefone"])) {
        $erro_telefone = "Telefone é obrigatório.";
    } else {
        $_SESSION["telefone"] = htmlspecialchars($_POST["telefone"]);
    }

    if (empty($_POST["cpf"])) {
        $erro_cpf = "CPF é obrigatório.";
    } elseif (!preg_match("/^[0-9]{11}$/", $_POST["cpf"])) {
        $erro_cpf = "CPF deve ter 11 dígitos.";
    } else {
        $_SESSION["cpf"] = htmlspecialchars($_POST["cpf"]);
    }

    if (empty($_POST["data_nascimento"])) {
        $erro_data_nascimento = "Data de nascimento é obrigatória.";
    } else {
        $_SESSION["data_nascimento"] = htmlspecialchars($_POST["data_nascimento"]);
    }

    if (empty($_POST["endereco"])) {
        $erro_endereco = "Endereço é obrigatório.";
    } else {
        $_SESSION["endereco"] = htmlspecialchars($_POST["endereco"]);
    }

    if (empty($_POST["cidade"])) {
        $erro_cidade = "Cidade é obrigatória.";
    } else {
        $_SESSION["cidade"] = htmlspecialchars($_POST["cidade"]);
    }

    if (empty($_POST["estado"])) {
        $erro_estado = "Estado é obrigatório.";
    } else {
        $_SESSION["estado"] = htmlspecialchars($_POST["estado"]);
    }

    if (empty($_POST["cep"])) {
        $erro_cep = "CEP é obrigatório.";
    } elseif (!preg_match("/^[0-9]{8}$/", $_POST["cep"])) {
        $erro_cep = "CEP deve ter 8 dígitos.";
    } else {
        $_SESSION["cep"] = htmlspecialchars($_POST["cep"]);
    }

    if (empty($_POST["senha"]) || empty($_POST["confirma_senha"])) {
        $erro_senha = "Ambos os campos de senha são obrigatórios.";
    } elseif ($_POST["senha"] !== $_POST["confirma_senha"]) {
        $erro_senha = "As senhas não coincidem.";
    } else {
        $_SESSION["senha"] = $_POST["senha"];
    }

    if (empty($erro_nome) && empty($erro_email) && empty($erro_telefone) && empty($erro_cpf) && empty($erro_data_nascimento) && empty($erro_endereco) && empty($erro_cidade) && empty($erro_estado) && empty($erro_cep) && empty($erro_senha)) {
        header("Location: gravaCliente.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="../styles/style_forms.css">
    <title>Cadastro de Clientes</title>
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
        <h2>Cadastro de Clientes</h2>

        <form action="gravaCliente.php" method="post" class="form-cliente">
            <div class="form-group">
                <label for="nome">Nome Completo:</label>
                <input type="text" id="nome" name="nome" placeholder="Digite seu Nome" value="<?php echo isset($_SESSION['nome']) ? $_SESSION['nome'] : ''; ?>" required>
                <span class="erro"><?php echo $erro_nome; ?></span>
            </div>

            <div class="form-group">
                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" placeholder="Digite seu e-mail" value="<?php echo isset($_SESSION['email']) ? $_SESSION['email'] : ''; ?>" required>
                <span class="erro"><?php echo $erro_email; ?></span>
            </div>

            <div class="form-group">
                <label for="telefone">Telefone:</label>
                <input type="tel" id="telefone" name="telefone" placeholder="(XX) XXXXX-XXXX" value="<?php echo isset($_SESSION['telefone']) ? $_SESSION['telefone'] : ''; ?>" required>
                <span class="erro"><?php echo $erro_telefone; ?></span>
            </div>

            <div class="form-group">
                <label for="cpf">CPF:</label>
                <input type="text" id="cpf" name="cpf" placeholder="Digite seu CPF" value="<?php echo isset($_SESSION['cpf']) ? $_SESSION['cpf'] : ''; ?>" required>
                <span class="erro"><?php echo $erro_cpf; ?></span>
            </div>

            <div class="form-group">
                <label for="data_nascimento">Data de Nascimento:</label>
                <input type="date" id="data_nascimento" name="data_nascimento" value="<?php echo isset($_SESSION['data_nascimento']) ? $_SESSION['data_nascimento'] : ''; ?>" required>
            </div>

            <div class="form-group">
                <label for="endereco">Endereço:</label>
                <input type="text" id="endereco" name="endereco" placeholder="Digite seu endereço completo" value="<?php echo isset($_SESSION['endereco']) ? $_SESSION['endereco'] : ''; ?>" required>
            </div>

            <div class="form-group">
                <label for="cidade">Cidade:</label>
                <input type="text" id="cidade" name="cidade" placeholder="Digite sua cidade" value="<?php echo isset($_SESSION['cidade']) ? $_SESSION['cidade'] : ''; ?>" required>
            </div>

            <div class="form-group">
                <label for="estado">Estado:</label>
                <select id="estado" name="estado" required>
                    <option value="">Selecione seu estado</option>
                    <option value="SP" <?php echo (isset($_SESSION['estado']) && $_SESSION['estado'] == 'SP') ? 'selected' : ''; ?>>São Paulo</option>
                    <option value="RJ" <?php echo (isset($_SESSION['estado']) && $_SESSION['estado'] == 'RJ') ? 'selected' : ''; ?>>Rio de Janeiro</option>
                    <option value="MG" <?php echo (isset($_SESSION['estado']) && $_SESSION['estado'] == 'MG') ? 'selected' : ''; ?>>Minas Gerais</option>
                </select>
            </div>

            <div class="form-group">
                <label for="cep">CEP:</label>
                <input type="text" id="cep" name="cep" placeholder="Digite seu CEP" value="<?php echo isset($_SESSION['cep']) ? $_SESSION['cep'] : ''; ?>" required>
            </div>

            <div class="form-group">
                <label for="senha">Crie uma senha:</label>
                <input type="password" id="senha" name="senha" placeholder="Digite uma senha" required>
            </div>

            <div class="form-group">
                <label for="confirma_senha">Confirme sua senha:</label>
                <input type="password" id="confirma_senha" name="confirma_senha" placeholder="Confirme sua senha" required>
                <span class="erro"><?php echo $erro_senha; ?></span>
            </div>

            <button type="submit" class="btn">Cadastrar-se e Seguir</button>
        </form>
    </section>

</body>

</html>
