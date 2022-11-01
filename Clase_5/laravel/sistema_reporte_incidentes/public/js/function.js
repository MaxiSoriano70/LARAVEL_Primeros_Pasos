$(document).ready(()=>{

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')     
        }
    }); 

    $("#submitCliente").click((e)=>{
        e.preventDefault();
        var razon_social=$("#razon_social").val();
        var cuit=$("#cuit").val();
        $.ajax({
            url:'clientes',
            type:'post',
            data: {"razon_social":razon_social,"cuit":cuit},
            success:function(response){
                console.log(response);
                alert(response.titulo);
            },
            error:function(){
                console.log("Error!");
            }
        });
    });
});