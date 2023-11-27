<?php
    session_start();

    if(isset($_SESSION['usuario'])){
        header("location: index.php");
    }

    

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <title>Login | Register</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="logo/ico.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/log.css">
    <link rel="shortcut icon" type="image/x-icon" href="./favicon.ico">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');



body {
  font-family: "Poppins", sans-serif;

 background-image: url('page fotos/login2.jpg'); 
  

  

  
}




main{
    width: 100%;
    padding: 20px;
    margin: auto;
    margin-top: 100px;

}

.contenedor__todo{
    width: 100%;
    max-width: 800px;
    margin: auto;
    position: relative;
}


.caja__trasera{
    border-radius: 10px;
    width: 100%;
    padding: 10px 20px;
    display: flex;
    justify-content: center;
    -webkit-backdrop-filter: blur(10px);
    backdrop-filter: blur(10px);
    background-color: #025939;

}

.caja__trasera div{
    margin: 100px 40px;
    color: white;
    transition: all 500ms;
}


.caja__trasera div p,
.caja__trasera button{
    margin-top: 30px;
}

.caja__trasera div h3{
    font-weight: 700;
    font-size: 26px;
}

.caja__trasera div p{
    font-size: 16px;
    font-weight: 300;
}

.caja__trasera button{
    padding: 10px 40px;
    border: 2px solid #fff;
    font-size: 14px;
    background: transparent;
    font-weight: 600;
    cursor: pointer;
    color: white;
    outline: none;
    transition: all 300ms;
}

.caja__trasera button:hover{
    background: #fff;
    color: #164a37;
}

/*Formularios*/

.contenedor__login-register{
    display: flex;
    align-items: center;
    width: 100%;
    max-width: 380px;
    position: relative;
    top: -225px;
    left: 10px;
    transition: left 500ms cubic-bezier(0.175, 0.885, 0.320, 1.275);
}

.contenedor__login-register form{
    width: 100%;
    padding: 80px 20px;
    background: #121212;
    position: absolute;
    border-radius: 20px;
}

.contenedor__login-register form h2{
    font-size: 30px;
    text-align: center;
    margin-bottom: 20px;
    color: #ffffff;
}

.contenedor__login-register form input{
    width: 100%;
    margin-top: 20px;
    padding: 10px;
    border: none;
    color: #fff;
    background-color: #121212;
    font-size: 16px;
    outline: none;
}
.contenedor__login-register form button{
    padding: 10px 40px;
    margin-top: 40px;
    border: none;
    font-size: 14px;
    background: #025939;
    font-weight: 600;
    cursor: pointer;
    color: white;
    outline: none;
    align-content: center;
}

.formulario__login{
    opacity: 1;
    display: block;
}
.formulario__register{
    display: none;
}

@media screen and (max-width: 850px){
    main{
        margin-top: 50px;
    }
    .caja__trasera{
        max-width: 350px;
        height: 300px;
        flex-direction: column;
        margin: auto;
    }
    .caja__trasera div{
        margin: 0px;
        position: absolute;
    }
    .contenedor__login-register{
        top: -10px;
        left: -5px;
        margin: auto;
    }
    .contenedor__login-register form{
        position: relative;
    }
}




    </style>
</head>
<body>

        <main>

            <div class="contenedor__todo">
                <div class="caja__trasera">
                    <div class="caja__trasera-login">
                        <h3>¿Ya tienes una cuenta?</h3>
                        <p>Inicia sesión para entrar en la página</p>
                        <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                    </div>
                    <div class="caja__trasera-register">
                        <h3>¿Aún no tienes una cuenta?</h3>
                        <p>Regístrate para que puedas iniciar sesión</p>
                        <button id="btn__registrarse">Regístrarse</button>
                    </div>
                </div>

    <div class="contenedor__login-register">
    <form action="php/login_usuario_be.php" method="POST" class="formulario__login">
        <div class="contenedor__campo">
            <img src="favicon.ico" alt="imagen de inicio de sesión" style="display: block; margin: 0 auto; width: 27%; position: relative; margin-top: -34px">
        </div>
        <h2>Iniciar Sesión</h2>
        <input type="text" placeholder="Correo Electronico" name="correo">
        <input type="password" placeholder="Contraseña" name="contrasena">
        <button>Entrar</button>
    </form>

    <form action="php/registro_usuario_be.php" method="POST" class="formulario__register">
        <div class="contenedor__campo">
            <img src="favicon.ico" alt="imagen de inicio de sesión" style="display: block; margin: 0 auto; width: 27%; margin-top: -35px;">
        </div>
        <h2>Regístrarse</h2>
        <input type="text" placeholder="Nombre completo" name="nombre_completo">
        <div class="contenedor__campo">
            <input type="text" placeholder="Correo Electronico" name="correo">
            <input type="text" placeholder="Usuario" name="usuario">
            <input type="password" placeholder="Contraseña" name="contrasena">
        </div>
        <button type="submit">Regístrarse</button>
    </form>
</div>


            </div>

        </main>

        <script src="js/index-log.js"></script>
</body>
</html>