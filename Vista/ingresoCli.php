<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingreso de Datos</title>
    <link rel="stylesheet" href="../publica/css/banner.css">
    <link rel="stylesheet" href="../publica/css/keyframes.css">
    <link rel="stylesheet" href="../publica/css/style.css">
    <link rel="stylesheet" href="../publica/ext/bootstrap/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../publica/css/formularios.css">
    <script src="../publica/ext/bootstrap/js/jquery-3.2.1.min.js"></script>
    <script src="../Modelo/Clientes.js" ></script>
    <link rel="stylesheet" href="../publica/css/fondos.css">
    <link rel="stylesheet" href="../publica/css/clientes.css">
</head>
<body class="">
<div class="area"></div>
    <nav class="main-menu">
            <ul>
                <li>
                    <a href="../Controlador/controladorCli.php?var1=1">
                        <img src="../publica/img/registro-en-linea.png" alt="" id="imm">
                        <i class="fa fa-home fa-2x"></i>
                        <span class="nav-text" >
                            Ingreso de clientes
                        </span>
                    </a>
                  
                </li>
                <li class="has-subnav">
                    <a href="../Vista/Buscar.php">
                    <img src="../publica/img/buscar.png" alt="" id="imm">
                        <i class="fa fa-laptop fa-2x"></i>
                        <span class="nav-text">
                            Buscar clientes
                        </span>
                    </a>
                    
                </li>
                <li class="has-subnav">
                    <a href="../Controlador/controladorCli.php?var1=4">
                    <img src="../publica/img/editar.png" alt="" id="imm">
                       <i class="fa fa-list fa-2x"></i>
                        <span class="nav-text">
                            Editar / Eliminar
                        </span>
                    </a>
                    
                </li>
                <li class="has-subnav">
                    <a href="../Vista/Mostrar.php">
                    <img src="../publica/img/ojo.png" alt="" id="imm">
                       <i class="fa fa-folder-open fa-2x"></i>
                        <span class="nav-text">
                            Mostrar clientes
                        </span>
                    </a> 
                </li>
                <li>
                    <a href="../index.html">
                        <img src="../publica/img/menuPrincipal.jpg" alt="" id="imm">
                        <i class="fa fa-home fa-2x"></i>
                        <span class="nav-text" >
                          Menú Principal
                        </span>
                    </a>
                </li>
    </nav>
<div class="ewk_cont_banner3">
  <br>
    <center><h1 class="display-4">Ingreso de datos <br> </h1></center>
    <div class="">
      <br>
      <center><form action="../Modelo/insertarCli.php" class="frmCliente" action="" id="frmClientes" method="POST">
        <div class="form-group row">
          <label for="inputPassword" class="col-sm-2 col-form-label">Cédula: </label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="Cédula" placeholder="Ingrese su cédula" name="Cédula" pattern="[0-9]{10}" title="La cedula debe tener 10 dígitos"required >
          </div>
        </div>

        <div class="form-group row">
          <label for="inputPassword" class="col-sm-2 col-form-label">Nombre: </label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="Nombre" placeholder="Ingrese su nombre" name="Nombre" pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{3,20}$" title="Mínimo 4 letras"required>
          </div>
        </div>

        <div class="form-group row">
          <label for="inputPassword" class="col-sm-2 col-form-label">Apellido: </label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="Apellido" placeholder="Ingrese su apellido" name="Apellido" pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{3,20}$" title="Mínimo 4 letras"required>
          </div>
        </div>

        <div class="form-group row">
          <label for="inputPassword" class="col-sm-2 col-form-label">Dirección: </label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="Dirección" placeholder="Ingrese su dirección" name="Dirección" pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{3,20}$" title="Mínimo 4 letras"required>
          </div>
        </div>

        <div class="form-group row">
          <label for="inputPassword" class="col-sm-2 col-form-label">Teléfono: </label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="Teléfono" placeholder="Ingrese su teléfono" name="Teléfono" pattern="[0-9]{10}" title="El teléfono debe tener 10 dígitos"required>
          </div>
        </div>

        <div class="form-group row">
          <label for="inputPassword" class="col-sm-2 col-form-label">Edad: </label>
          <div class="col-sm-10">
            <input type="number" class="form-control" onkeypress="return num1(event)" id="Edad" placeholder="Ingrese su edad" name="Edad" min="18" max="80" title="Edad [18-80]" required>
          </div>
        </div>

        <div class="form-group row">
          <label for="inputPassword" class="col-sm-2 col-form-label">Correo: </label>
            <div class="col-sm-10">
              <input type="email" class="form-control" id="Correo" placeholder="Ingrese su correo" name="Correo" required>
            </div>
        </div>
        <br>
        <center><input type="submit" id="btnInsertarClientes"  class="btn btn-primary" value="Registrar"></center>
        
      </form></center>
    </div>
  </div>

</body>
</html>