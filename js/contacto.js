function contacto ()
{
    var nombre=document.getElementById("name").value;
    var correo=document.getElementById("email").value;
    var mensaje=document.getElementById("msg").value;
   
    //Inicia validacion
    
    //Fin validacion
    
    $.ajax({
type: "POST",
url: "./ajax/nuevo_contacto.php",
data: "nombre="+nombre+"&correo="+correo+"&mensaje="+mensaje,
 beforeSend: function(objeto){
    
  },
success: function(datos){
            alert(datos);
}
    });
}