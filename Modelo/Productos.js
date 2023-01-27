function insertarProductos(){
    $(document).ready(function(){
        $('#btnInsertarProductos').click(function(){
            
            var datos=$('#frmProductos').serialize();
            console.log(datos);
            $.ajax({
                type:"POST",
                url:"../Modelo/insertarProducto1.php",
                data:datos,
                success:function(m){
                    if(m!=1)
                    alert("Ingresados correctamente");  
                    else
                    alert("Fallo al ingresar");
                }
            });
            return false
        });
    });
}

function Confirmar(){
    var respuesta = confirm("Desea eliminar el producto?");
    return respuesta;
}

