<?php

    session_start();

    if(!isset($_SESSION['user'])){
        $message = "Iniciar Sesion";
    }else{
        $message = "Perfil";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
    <title>Gorilla Sound - Inicio</title>
    <script src="https://kit.fontawesome.com/264e1a2102.js" crossorigin="anonymous"></script>
</head>
<body id="body">
    <header>
        <div class="header">
            <div class="menu-img">
                <i class="fas fa-bars" id="btn_open"></i>
            </div>
        </div>
        <h1>Gorilla Sound</h1>
        <div id="search">
                    <form action="" method="post">
                        <input type="text" name="search" id="searchB">
                        <button type="submit" class="btn_search"><i class="fas fa-search" title="Buscar"></i></button>
                    </form>
                </div>
    </header>
    <div class="menu" id="menu">

        <div class="namepage">
            <div class="img" id="logo">
                <img src="assets/GorillaSoundLogo.png" alt="GorillaSounds">
            </div>
            
        </div>

        <div class="options">


            <a href="../Inicio/Inicio.php" >
                <div class="option">
                    <i class="fas fa-home" title="Inicio"></i>
                    <h4>Inicio</h4>
                </div>
            </a>

            <?php if($message=="Iniciar Sesion"):?>
                <a href="../Iniciar_Sesion/Iniciar_Sesion.php">
                    <div class="option">
                        <i class="far fa-user" title="Perfil"></i>
                        <h4><?= $message ?></h4>
                    </div>
                </a>
            <?php else: ?>
                <a href="../Perfil/Perfil.php">
                    <div class="option">
                        <i class="far fa-user" title="Perfil"></i>
                        <h4><?= $message ?></h4>
                    </div>
                </a>
            <?php endif;?>

            <a href="../Artistas/Artistas.php">
                <div class="option">
                <i class="fas fa-users" title="Artistas"></i>
                    <h4>Artistas</h4>
                </div>
            </a>

            <a href="../Generos/Generos.php" class="select">
                <div class="option">
                <i class="fas fa-guitar" title="Generos"></i>
                    <h4>Generos</h4>
                </div>
            </a>

            <a href="../Lista_de_Reproduccion/Lista_de_Reproduccion.php">
                <div class="option">
                    <i class="fas fa-compact-disc" title="Lista de Reproduccion"></i>
                    <h4>Lista de Reproduccion</h4>
                </div>
            </a>
        </div>

    </div>

    <main>
        <h2>Titulo</h2>
    </main>

    <footer>

    </footer>

    <script src="assets/script.js"></script>
</body>
</html>