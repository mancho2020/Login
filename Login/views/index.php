<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login y Register - MagtimusPro</title>

    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="../assets/css/style.css">
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

            <!--Formulario de Login y registro-->
            <div class="contenedor__login-register">
                <!--Login-->
                <form action="./validar.php" method="post" class="formulario__login">
                    <h2>Iniciar Sesión</h2>
                    <input type="text" name="email" placeholder="Correo Electronico">
                    <input type="password" name="contra" placeholder="Contraseña">
                    <button>Entrar</button>
                </form>

                <!--Register-->
                <form action="./userProcess.php" method="post" class="formulario__register">
                    <h2>Regístrarse</h2>
                    <input type="text" name="name" placeholder="Nombre completo">
                    <input type="text" name="email" placeholder="Correo Electronico">
                    <input type="text" name="user" placeholder="Usuario">
                    <input type="password" name="contra" placeholder="Contraseña">
                    <button>Regístrarse</button>
                </form>
                <section class="modal ">
                    <div class="modal__container">
                        <!-- <img src="images/modal.svg" class="modal__img">-->
                        <img src="images/Football team_Outline.svg" class="modal__img">
                        <h2 class="modal__title">¡Bienvenido al sitio!</h2>
                        <p class="modal__paragraph">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti nobis nisi quibusdam doloremque expedita quae ipsam accusamus quisquam quas, culpa tempora. Veniam consectetur deleniti maxime.</p>
                        <a href="#" class="modal__close">Cerrar Modal</a>
                    </div>
                </section>
            </div>
        </div>

    </main>


    <script src="../assets/js/script.js"></script>
</body>

</html>