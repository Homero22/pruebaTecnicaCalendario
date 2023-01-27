<?php
include("../Config/conexion.php");
$usuarios= $conexion->query("SELECT * from admin 
WHERE Usuario='".$_POST['usuarioIngresar']. "'
AND clave= '".$_POST['claveIn']."'");

if($usuarios->num_rows==1):
    $datos= $usuarios->fetch_assoc();
    echo json_encode(array('error'=>false, 'Tipo'=>$datos['Tipo']));
    
else:
    echo json_encode(array('error'=>true));
endif;

?>