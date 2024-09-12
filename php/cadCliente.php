<!DOCTYPE html>
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
    <link rel="stylesheet" href="../styles/style_forms.css">
    <title>Cadastro de Clientes</title>
</head>
<body>

    <header>
        <a href="#" class="logo"><i class='bx bx-headphone'></i>Storm Fones</a>

        <ul class="navegação">
            <li><a href="index.php">Visão geral</a></li>
            <li><a href="index.php">Sobre nós</a></li>
            <li><a href="index.php">Contate-nos</a></li>
        </ul>
    </header>

    <section class="form-section">
        <h2>Cadastro de Clientes</h2>

        <form action="compra.php" method="post" class="form-cliente">
            <div class="form-group">
                <label for="nome">Nome Completo:</label>
                <input type="text" id="nome" name="nome" placeholder="Digite seu Nome" maxlength="40" minlength="5" required>
            </div>

            <div class="form-group">
                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" placeholder="Digite seu e-mail" maxlength="30" minlength="5" required>
            </div>

            <div class="form-group">
                <label for="telefone">Telefone:</label>
                <input type="tel" id="telefone" name="telefone" placeholder="(XX) XXXXX-XXXX" maxlength="11" minlength="11" required>
            </div>

            <div class="form-group">
                <label for="cpf">CPF:</label>
                <input type="text" id="cpf" name="cpf" placeholder="Digite seu CPF" maxlength="11" minlength="11" required>
            </div>

            <div class="form-group">
                <label for="data_nascimento">Data de Nascimento:</label>
                <input type="date" id="data_nascimento" name="data_nascimento" required>
            </div>

            <div class="form-group">
                <label for="endereco">Endereço:</label>
                <input type="text" id="endereco" name="endereco" placeholder="Digite seu endereço completo" required>
            </div>

            <div class="form-group">
                <label for="cidade">Cidade:</label>
                <input type="text" id="cidade" name="cidade" placeholder="Digite sua cidade" required>
            </div>

            <div class="form-group">
                <label for="estado">Estado:</label>
                <select id="estado" name="estado" required>
                    <option value="">Selecione seu estado</option>
                    <option value="SP">São Paulo</option>
                    <option value="RJ">Rio de Janeiro</option>
                    <option value="MG">Minas Gerais</option>
                </select>
            </div>

            <div class="form-group">
                <label for="cep">CEP:</label>
                <input type="text" id="cep" name="cep" placeholder="Digite seu CEP" required>
            </div>

            <div class="form-group">
                <label for="senha">Crie uma senha:</label>
                <input type="password" id="senha" name="senha" placeholder="Digite uma senha" required>
            </div>

            <div class="form-group">
                <label for="confirma_senha">Confirme sua senha:</label>
                <input type="password" id="confirma_senha" name="confirma_senha" placeholder="Confirme sua senha" required>
            </div>

            <button type="submit" class="btn">Cadastrar-se e Seguir</button>
        </form>
    </section>

</body>
</html>
