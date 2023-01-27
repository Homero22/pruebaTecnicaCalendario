function miFuncion(){
    
    $(document).ready(function(){
        $('#btnguardar').click(function(){
            var datos=$('#frmajax').serialize();
            $.ajax({
                type:"POST",
                url:"insertarCli.php",
                data:datos,
                success:function(r){
                    if(r!=1)
                    alert("Ingresados correctamente")
                    else
                    alert("Fallo al ingresar")
                }
            })
            return false
        })
    })
}

function miFuncion1(){
    
    $(document).ready(function(){
        $('#botonR').click(function(){
            var datos=$('#reporte2').serialize();
            $.ajax({
                type:"POST",
                url:"../Reportes/Reporte2.php",
                data:datos,
                success:function(r){
                    if(r!=1)
                    alert("Cédula enviada")
                    else
                    alert("Fallo al ingresar")
                }
            })
            return false
        })
    })
}


