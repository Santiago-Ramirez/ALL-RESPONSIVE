$(document).ready(function()
{
     $('[data-toggle="popover"]').popover();

     $("#guardar").click(function()
     {
     	if (("#user").val()=="") {
           alertify.alert("ingrese un usuario");
     	}

     	else if (("#password").val()=="") {}
     })
});
