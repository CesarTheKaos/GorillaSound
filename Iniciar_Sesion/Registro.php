<?php
    $message = "";

    include("database.php");
    if(isset($_POST['reg'])){
        if(strlen($_POST['user']) >= 1 && strlen($_POST['email']) >= 1 && strlen($_POST['pass']) >= 1){
            $user = $_POST['user'];
            $email = $_POST['email'];
            $pass = $_POST['pass'];
            $pass = hash('sha512',$pass);
            $register = "INSERT INTO users(user, email, pass) VALUES ('$user','$email','$pass')";
            $mailv = mysqli_query($conex,"SELECT * FROM users WHERE email ='$email'");
            
            if(mysqli_num_rows($mailv) > 0){
                $message = "Este correo a sido registrado anteriormente!";
            }else{
                $userv = mysqli_query($conex,"SELECT * FROM users WHERE user ='$user'");
                if(mysqli_num_rows($userv) > 0){
                    $message = "Este nombre de usuario no esta disponible!";
                }else{
                    $end = mysqli_query($conex,$register);

                    if($end){
                        $message = "Registrado Correctamente!";
                    }else{
                        $message = "Ocurrio un error, intentalo nuevamente!";
                    }
                }
                 
            }
        }else{
        $message = "Uno o mas valores estan vacios!";
    }
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
    <link rel="shortcut icon" href="assets/GorillaSoundLogo.ico">
    <title>Registro</title>
</head>
<body>
        <div class="container">
            <div class="login">
                <h1 class="title">Registrarse</h1>
                <form action="Registro.php" method="POST" class="inputs">
                    <input name="user" class="input" type="text" placeholder="Usuario" minlength="3" maxlength="20">
                    <input name="email" class="input" type="email" placeholder="Correo Electronico">
                    <input name="pass" class="input" type="password" placeholder="Contraseña" minlength="6" maxlength="18">
                    <div><input type="checkbox" name="terms" id="term" required> <label for="term">Aceptar <a href="">Terminos y Condiciones</a></label></div>
                    <input name="reg" class="btn" type="submit" value="Registrarse">
                    <p>¿Tienes una cuenta? <a href="Iniciar_Sesion.php" class="register">Iniciar Sesion</a></p>
                </form>
                <?php if(!empty($message)):?>
                    <p class="msg"> <?= $message ?></p>
                <?php endif; ?>
            </div>
            <div class="logo">
            <a href="../index.php"><img src="assets/GorillaSoundLogo.png" alt="GorillaSound" class="imgL"></a>
            </div>
        </div>
</body>
</html>