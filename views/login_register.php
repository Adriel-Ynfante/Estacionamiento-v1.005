<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login/Registration Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="./assets/css/login_register.css">
</head>
<body>
    <div class="fondo">
        <span class="icono-cerrar"><i class="bi bi-x"></i></span>
        <div class="contenedor-form login">
            <h2>Iniciar Sesión</h2>
            <section class="iconos">
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-twitter"></i></a>
                <a href="#"><i class="bi bi-instagram"></i></a>
            </section>
            <form action="<?php echo htmlspecialchars('/codLogin'); ?>" method="post">
                <div class="contenedor-input">
                    <span class="icono"><i class="bi bi-person-circle"></i></span>
                    <input type="email" id="emailLogin" name="emailLogin" required 
                           value="<?php echo isset($_POST['emailLogin']) ? htmlspecialchars($_POST['emailLogin']) : ''; ?>">
                    <label for="emailLogin">Correo Electonico</label>
                </div>
                <div class="contenedor-input">
                    <span class="icono"><i class="bi bi-lock-fill"></i></span>
                    <input type="password" id="passwordLogin" name="passwordLogin" required>
                    <label for="passwordLogin">Contraseña</label>
                </div>
                <div class="recordar">
                    <label>
                        <input type="checkbox" name="remember" <?php echo isset($_POST['remember']) ? 'checked' : ''; ?>> Recordar
                    </label>
                    <a href="#">¿Olvidé la contraseña?</a>
                </div>
                <button type="submit" class="boton">Acceder</button>
                <div class="registrar">
                    <p>No tengo cuenta | <a href="#" class="registrar-link">Registrarse</a></p>
                </div>
            </form>
        </div>

        <div class="contenedor-form registrar">
            <h2>Registrarse</h2>
            <section class="iconos">
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-twitter"></i></a>
                <a href="#"><i class="bi bi-instagram"></i></a>
            </section>
            <form id="register" action="<?php echo htmlspecialchars('/regUsuario'); ?>" method="post">
                <div class="contenedor-input">
                    <span class="icono"><i class="bi bi-person-circle"></i></span>
                    <input type="text" id="userReg" name="userReg" required
                           value="<?php echo isset($_POST['userReg']) ? htmlspecialchars($_POST['userReg']) : ''; ?>">
                    <label for="userReg">Nombre de usuario</label>
                </div>
                <div class="contenedor-input">
                    <span class="icono"><i class="bi bi-envelope"></i></span>
                    <input type="email" id="emailReg" name="emailReg" required
                           value="<?php echo isset($_POST['emailReg']) ? htmlspecialchars($_POST['emailReg']) : ''; ?>">
                    <label for="emailReg">Correo Electrónico</label>
                </div>
                <div class="contenedor-input">
                    <span class="icono"><i class="bi bi-lock-fill"></i></span>
                    <input type="password" id="passwordReg" name="passwordReg" required>
                    <label for="passwordReg">Contraseña</label>
                </div>
                <div class="recordar">
                    <label>
                        <input type="checkbox" required name="terms"
                               <?php echo isset($_POST['terms']) ? 'checked' : ''; ?>> Acepto los términos y condiciones
                    </label>
                </div>
                <button type="submit" class="boton" name="registrar">Registrarme</button>
                <div class="registrar">
                    <p>¿Tienes una cuenta? <a href="#" class="login-link">Iniciar Sesión</a></p>
                </div>
            </form>
        </div>
    </div>
    <?php
    if (isset($_SESSION['error'])) {
        echo '<div class="alert alert-danger">' . htmlspecialchars($_SESSION['error']) . '</div>';
        unset($_SESSION['error']);
    }
    if (isset($_SESSION['success'])) {
        echo '<div class="alert alert-success">' . htmlspecialchars($_SESSION['success']) . '</div>';
        unset($_SESSION['success']);
    }
    ?>
<script src="./assets/js/login_register.js"></script>
</body>
</html>