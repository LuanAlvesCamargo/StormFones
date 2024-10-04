<!DOCTYPE html>

<?php
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];
    $cpf = $_POST["cpf"];
    $data_nascimento = $_POST["data_nascimento"];
    $endereco = $_POST["endereco"];
    $cidade = $_POST["cidade"];
    $estado = $_POST["estado"];
    $cep = $_POST["cep"];
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
    <link rel="stylesheet" href="../styles/style_compra.css">
    <title>Compra de Fones de Ouvido</title>
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

    <section class="products-section">
        <h2>Escolha seus Produtos</h2>
        <form action="pagamento.php" method="post">
            <input type="hidden" name="nome" value="<?php echo $nome; ?>">
            <input type="hidden" name="email" value="<?php echo $email; ?>">
            <input type="hidden" name="telefone" value="<?php echo $telefone; ?>">
            <input type="hidden" name="cpf" value="<?php echo $cpf; ?>">
            <input type="hidden" name="data_nascimento" value="<?php echo $data_nascimento; ?>">
            <input type="hidden" name="endereco" value="<?php echo $endereco; ?>">
            <input type="hidden" name="cidade" value="<?php echo $cidade; ?>">
            <input type="hidden" name="estado" value="<?php echo $estado; ?>">
            <input type="hidden" name="cep" value="<?php echo $cep; ?>">

            <div class="products-container">
                <!-- Produto 1 -->
                <div class="product-item">
                    <img src="../img/main1.png" alt="Fone de Ouvido A">
                    <p>Fone de Ouvido A - R$99,99</p>
                    <label>
                        <input type="checkbox" name="prod1" value="1"> Comprar
                    </label>
                    <select name="qtd1">
                        <option value="1">Quantidade: 1</option>
                        <option value="2">Quantidade: 2</option>
                        <option value="3">Quantidade: 3</option>
                        <option value="4">Quantidade: 4</option>
                        <option value="5">Quantidade: 5</option>
                    </select>
                </div>

                <!-- Produto 2 -->
                <div class="product-item">
                    <img src="../img/main1.png" alt="Fone de Ouvido B">
                    <p>Fone de Ouvido B - R$99,99</p>
                    <label>
                        <input type="checkbox" name="prod2" value="2"> Comprar
                    </label>
                    <select name="qtd2">
                        <option value="1">Quantidade: 1</option>
                        <option value="2">Quantidade: 2</option>
                        <option value="3">Quantidade: 3</option>
                        <option value="4">Quantidade: 4</option>
                        <option value="5">Quantidade: 5</option>
                    </select>
                </div>

                 <!-- Produto 3 -->
                <div class="product-item">
                    <img src="../img/main1.png" alt="Fone de Ouvido C">
                    <p>Fone de Ouvido C - R$99,99</p>
                    <label>
                        <input type="checkbox" name="prod3" value="3"> Comprar
                    </label>
                    <select name="qtd3">
                        <option value="1">Quantidade: 1</option>
                        <option value="2">Quantidade: 2</option>
                        <option value="3">Quantidade: 3</option>
                        <option value="4">Quantidade: 4</option>
                        <option value="5">Quantidade: 5</option>
                    </select>
                </div>

                 <!-- Produto 4 -->
                 <div class="product-item">
                    <img src="../img/main1.png" alt="Fone de Ouvido D">
                    <p>Fone de Ouvido D - R$99,99</p>
                    <label>
                        <input type="checkbox" name="prod4" value="4"> Comprar
                    </label>
                    <select name="qtd4">
                        <option value="1">Quantidade: 1</option>
                        <option value="2">Quantidade: 2</option>
                        <option value="3">Quantidade: 3</option>
                        <option value="4">Quantidade: 4</option>
                        <option value="5">Quantidade: 5</option>
                    </select>
                </div>

                 <!-- Produto 5 -->
                 <div class="product-item">
                    <img src="../img/main2.png" alt="Fone de Ouvido E">
                    <p>Fone de Ouvido E - R$99,99</p>
                    <label>
                        <input type="checkbox" name="prod5" value="5"> Comprar
                    </label>
                    <select name="qtd5">
                        <option value="1">Quantidade: 1</option>
                        <option value="2">Quantidade: 2</option>
                        <option value="3">Quantidade: 3</option>
                        <option value="4">Quantidade: 4</option>
                        <option value="5">Quantidade: 5</option>
                    </select>
                </div>

                <!-- Produto 6 -->
                <div class="product-item">
                    <img src="../img/main2.png" alt="Fone de Ouvido F">
                    <p>Fone de Ouvido F - R$99,99</p>
                    <label>
                        <input type="checkbox" name="prod6" value="6"> Comprar
                    </label>
                    <select name="qtd6">
                        <option value="1">Quantidade: 1</option>
                        <option value="2">Quantidade: 2</option>
                        <option value="3">Quantidade: 3</option>
                        <option value="4">Quantidade: 4</option>
                        <option value="5">Quantidade: 5</option>
                    </select>
                </div>

                 <!-- Produto 7 -->
                 <div class="product-item">
                    <img src="../img/main2.png" alt="Fone de Ouvido G">
                    <p>Fone de Ouvido G - R$99,99</p>
                    <label>
                        <input type="checkbox" name="prod7" value="7"> Comprar
                    </label>
                    <select name="qtd7">
                        <option value="1">Quantidade: 1</option>
                        <option value="2">Quantidade: 2</option>
                        <option value="3">Quantidade: 3</option>
                        <option value="4">Quantidade: 4</option>
                        <option value="5">Quantidade: 5</option>
                    </select>
                </div>
                
                <!-- Produto 8 -->
                <div class="product-item">
                    <img src="../img/main2.png" alt="Fone de Ouvido H">
                    <p>Fone de Ouvido H - R$99,99</p>
                    <label>
                        <input type="checkbox" name="prod8" value="8"> Comprar
                    </label>
                    <select name="qtd8">
                        <option value="1">Quantidade: 1</option>
                        <option value="2">Quantidade: 2</option>
                        <option value="3">Quantidade: 3</option>
                        <option value="4">Quantidade: 4</option>
                        <option value="5">Quantidade: 5</option>
                    </select>
                </div>

                 <!-- Produto 9 -->
                 <div class="product-item">
                    <img src="../img/main3.png" alt="Fone de Ouvido I">
                    <p>Fone de Ouvido I - R$99,99</p>
                    <label>
                        <input type="checkbox" name="prod9" value="9"> Comprar
                    </label>
                    <select name="qtd9">
                        <option value="1">Quantidade: 1</option>
                        <option value="2">Quantidade: 2</option>
                        <option value="3">Quantidade: 3</option>
                        <option value="4">Quantidade: 4</option>
                        <option value="5">Quantidade: 5</option>
                    </select>
                </div>

                <!-- Produto 10 -->
                <div class="product-item">
                    <img src="../img/main3.png" alt="Fone de Ouvido J">
                    <p>Fone de Ouvido J - R$99,99</p>
                    <label>
                        <input type="checkbox" name="prod10" value="10"> Comprar
                    </label>
                    <select name="qtd10">
                        <option value="1">Quantidade: 1</option>
                        <option value="2">Quantidade: 2</option>
                        <option value="3">Quantidade: 3</option>
                        <option value="4">Quantidade: 4</option>
                        <option value="5">Quantidade: 5</option>
                    </select>
                </div>

                 <!-- Produto 11 -->
                 <div class="product-item">
                    <img src="../img/main3.png" alt="Fone de Ouvido K">
                    <p>Fone de Ouvido K - R$99,99</p>
                    <label>
                        <input type="checkbox" name="prod11" value="11"> Comprar
                    </label>
                    <select name="qtd11">
                        <option value="1">Quantidade: 1</option>
                        <option value="2">Quantidade: 2</option>
                        <option value="3">Quantidade: 3</option>
                        <option value="4">Quantidade: 4</option>
                        <option value="5">Quantidade: 5</option>
                    </select>
                </div>
                
                <!-- Produto 12 -->
                <div class="product-item">
                    <img src="../img/main3.png" alt="Fone de Ouvido L">
                    <p>Fone de Ouvido L - R$99,99</p>
                    <label>
                        <input type="checkbox" name="prod12" value="12"> Comprar
                    </label>
                    <select name="qtd12">
                        <option value="1">Quantidade: 1</option>
                        <option value="2">Quantidade: 2</option>
                        <option value="3">Quantidade: 3</option>
                        <option value="4">Quantidade: 4</option>
                        <option value="5">Quantidade: 5</option>
                    </select>
                </div>
            </div>
            <section class="purchase-section">
                    <button type="submit" id="purchase-btn">Finalizar Compra</button>
                </section>
        </form>
    </section>
    

</body>
</html>
