function insertarClientes(){
    $(document).ready(function(){
        $('#btnInsertarClientes').click(function(){
            var datos=$('#frmClientes').serialize();
            $.ajax({
                type:"POST",
                url:"../Modelo/insertarCli.php",
                data:datos,
                success:function(r){
                    if(r!=1)
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
    var respuesta = confirm("Desea eliminar el usuario?");
    return respuesta;
}

function num1(evt){
    if(window.event){
        keynum=evt.keyCode;
    }else{
        keynum= evt.wich;
    }
    if((keynum>47 && keynum<58) || keynum==8||keynum==13)
    return true
    else{
        alert("Ingrese valores numéricos ")
        return false
    }
}


var validar = function () {
    alert("holaxd");
    var band = true;
    var edad = document.getElementById("edad").value;


    //alert("El áreal del triángulo es: " + calcularArea(l1, l2, l3));
    do{

        if(edad == ""){
            alert("Debe llenar todos los campos!");
            band = false;
        }
    }while(false);

    if(band == true){
        //document.querySelector("#resulArea").innerHTML = calcularArea(parseInt(l1), parseInt(l2), parseInt(l3));
        //document.querySelector("#resulArea").style.color = 'blue';
    }

    return band;

}
