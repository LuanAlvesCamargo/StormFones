<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet"
    href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/style_index.css">
    <title>Fones de Ouvidos</title>
</head>
<body>

    <header>
        <a href="#" class="logo"><i class='bx bx-headphone'></i>Storm Fones</a>

        <ul class="navegação">
            <li><a href="index.php">Visão geral</a></li>
            <li><a href="index.php">Sobre nós</a></li>
            <li><a href="php/cadCliente.php">faça o seu cadastro</a></li>
            <li><a href="index.php">Contate-nos</a></li>
        </ul>

        <div class="header-icons">
            <i class='bx bx-cart'></i>
            <div id="menu"><i class='bx bx-menu'></i></div>
        </div>
    </header>

    <section class="home">
        <div class="img/home-img">
            <img src="img/product1.png" class="one">
        </div>

        <div class="home-text">
            <h1>Wireless <br> Headphones</h1>
            <h5>The smarter way to listen</h5>
            <h3>$199.00</h3>
            <a href="php/compra.php" class="btn">Comprar</a>
        </div>
    </section>

    <div class="main">
        <div class="row">
            <li><img src="img/main1.png" onclick="slider('img/product1.png')"></li>
        </div>

        <div class="row2">
            <li><img src="img/main2.png" onclick="slider('img/product2.png')"></li>
        </div>

        <div class="row3">
            <li><img src="img/main3.png" onclick="slider('img/product3.png')"></li>
        </div>
    </div>
   
    <script>
        function slider(anything) {
            document.querySelector('.one').src = anything;
        }

        let menu = document.querySelector('#menu-icon');
        let navbar = document.querySelector('.navbar');

        menu.onclick = () => {
            menu.classList.toggle('bx-x');
            navbar.classList.toggle('open');
        }
    </script>

</body>
</html>
