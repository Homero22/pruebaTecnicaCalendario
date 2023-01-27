jQuery(document).on('submit','#frmIngresar',function(event){
    event.preventDefault();
    jQuery.ajax({
        url:'../Modelo/ingresarUsuario.php',
        type:'POST',
        dataType:'json',
        data:$(this).serialize(),
        beforeSend:function(){
            $('.button').val('Validando...');
        }
    })
    .done(function(respuesta){
        console.log(respuesta);
        if(!respuesta.error){
            if(respuesta.Tipo=="A"){
                location.href = '../index.html';
            }else if(respuesta.Tipo=='U'){
                location='../Usuario/MenuUsuario.html';
            }
        }else{
            alert("Error en el ingreso");
            $('.button').val('Iniciar Sesión');
        }
    })
    .fail(function(resp){
        console.log(resp.responseText);
    })
    .always(function(){
        console.log("completo");
    })

})



