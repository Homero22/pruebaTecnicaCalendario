<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../publica/css/login.css">
    <script src="../publica/ext/bootstrap/js/jquery-3.1.1.min.js"></script>
    
</head>
<body>
    <div class="login-wrap">
        <div class="login-html">
            <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Iniciar Sesión</label>
            <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab"></label>
            <div class="login-form">
                <div class="sign-in-htm">
                    <form action="" id="frmIngresar">

                        <div class="group">
                            <label for="user" class="label">Nombre de Usuario</label>
                            <input id="user" type="text" class="input" name ="usuarioIngresar">
                        </div>
                        <div class="group">
                            <label for="pass" class="label">Contraseña</label>
                            <input id="pass" type="password" name ="claveIn" class="input" data-type="password">
                        </div>
                       
                        <div class="group">
                            <input type="submit" class="button" id="btnIngresar"  value="Iniciar Sesión">
                        </div>
                        <div class="hr"></div>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
    <script src="../Modelo/usuarioIngresar.js" ></script>
</body>
</html>