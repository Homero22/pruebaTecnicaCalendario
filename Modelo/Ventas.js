function insertarFactura(){
    $(document).ready(function(){
        $('#btnInsertarFactura').click(function(){
            
            var datos=$('#frmFactura').serialize();
            console.log(datos);
            $.ajax({
                type:"POST",
                url:"../Modelo/InsertarFac.php",
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