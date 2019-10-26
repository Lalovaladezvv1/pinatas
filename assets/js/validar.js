function validarForm(){
    var form = document.addForm;

    if(form.txt_nombre.value == "")
    {
        //alert("Campo Nombre vacio");
        document.getElementById("alerta").innerHTML = '<div class="alert alert-danger"><a href="" class="close" data-dismiss="alert">&times;</a> Ingresa tu nombre </div>';
        form.txt_nombre.focus();
        return false;
    }
    else{
        document.getElementById("alerta").innerHTML = "";
    }
    if(form.txt_email.value == "")
    {
        document.getElementById("alerta").innerHTML = '<div class="alert alert-danger"><a href="" class="close" data-dismiss="alert">&times;</a>Ingresa tu Email</div>';
        form.txt_email.focus();
        return false;
    }
    else
    {
        document.getElementById("alerta").innerHTML = "";
    }
    if(form.txt_comentario.value == "")
    {
        document.getElementById("alerta").innerHTML = '<div class="alert alert-danger"><a href="" class="close" data-dismiss="alert">&times;</a>Ingresa tu comentario</div>';
        form.txt_comentario.focus();
        return false;
    }
    else
    {
        document.getElementById().innerHTML = "";
    }

    form.submit();
}