<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../publica/css/banner.css">
    <link rel="stylesheet" href="../publica/css/keyframes.css">
    <link rel="stylesheet" href="../publica/css/style.css">
    <link rel="stylesheet" href="../publica/css/clientes.css">
    <link rel="stylesheet" href="../publica/ext/bootstrap/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!--<link rel="stylesheet" href="../publica/css/estiloForm.css">-->
    <link rel="stylesheet" href="../publica/css/formularios.css">
    <script src="../publica/ext/bootstrap/js/jquery-3.2.1.min.js"></script>
    <script src="../Modelo/Productos.js" ></script>
</head>
<body>

<nav class="main-menu">
            <ul>
                <li>
                    <a href="../Controlador/controladorProductos.php?var1=1">
                        <img src="../publica/img/registro-en-linea.png" alt="" id="imm">
                        <i class="fa fa-home fa-2x"></i>
                        <span class="nav-text">
                            Ingreso de productos
                        </span>
                    </a>
                  
                </li>
                <li class="has-subnav">
                    <a href="../Controlador/controladorProductos.php?var1=2">
                    <img src="../publica/img/buscar_productos.png" alt="" id="imm">
                        <i class="fa fa-laptop fa-2x"></i>
                        <span class="nav-text">
                            Buscar productos
                        </span>
                    </a>
                    
                </li>
                <li class="has-subnav">
                    <a href="../Controlador/controladorProductos.php?var1=3">
                    <img src="../publica/img/editar.png" alt="" id="imm">
                       <i class="fa fa-list fa-2x"></i>
                        <span class="nav-text">
                            Editar / Eliminar
                        </span>
                    </a>
                    
                </li>
                <li class="has-subnav">
                    <a href="../Controlador/controladorProductos.php?var1=4">
                    <img src="../publica/img/ojo.png" alt="" id="imm">
                       <i class="fa fa-folder-open fa-2x"></i>
                        <span class="nav-text">
                            Mostrar productos
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
<div class="ewk_cont_banner">
  <br>
    <center><h1 class="display-4">Ingreso de Productos<br> </h1></center>
    <div class="">
      <br>
    <center><form action="../Modelo/insertarProducto1.php" class="frmCliente" action="" id="frmProductos" method="POST">
        <div class="form-group row">
          <label for="inputPassword" class="col-sm-2 col-form-label">Código: </label>
          <div class="col-sm-10">
            <input type="number" class="form-control" id="codigo" placeholder="Ingrese el código" name="codigo" min="1" max="99999999" title="Código [1-99999999]"required >
          </div>
        </div>

        <div class="form-group row">
          <label for="inputPassword" class="col-sm-2 col-form-label">Nombre: </label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="nombre" placeholder="Ingrese el nombre" name="nombre" pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{2,20}$" title="Mínimo 3 letras" required>
          </div>
        </div>

        <div class="form-group row">
          <label for="inputPassword" class="col-sm-2 col-form-label">Categoría: </label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="categoria" placeholder="Ingrese la categoría" name="categoria" pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{2,20}$" title="Categoría de 3 letras" required> 
          </div>
        </div>
        <div class="form-group row">
          <label for="inputPassword" class="col-sm-2 col-form-label">Cantidad: </label>
          <div class="col-sm-10">
            <input type="number" class="form-control" id="cantidad" placeholder="Ingrese la cantidad" min="1"  name="cantidad" required>
          </div>
        </div>

        <div class="form-group row">
          <label for="inputPassword" class="col-sm-2 col-form-label">Descripción: </label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="descripcion" placeholder="Ingrese su descripción" name="descripcion" pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{1,20}$" title="Mínimo 2 letras" required>
          </div>
        </div>

        <div class="form-group row">
          <label for="inputPassword" class="col-sm-2 col-form-label">Precio: </label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="precio" placeholder="Ingrese el precio" name="precio" required>
          </div>
        </div>
        <br>
        <center><input type="submit" id="btnInsertarProductos"  class="btn btn-primary" value="Registrar"></center>
      </form></center>
    </div>
  </div>

    
</body>
</html>