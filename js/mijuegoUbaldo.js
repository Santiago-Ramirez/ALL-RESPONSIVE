$(document).ready(function()
{
var ubaldo = prompt("Ingresa tu numero por favor, para poder jugar");
$('body').append("<center><h4>Bienvenido al juego "+ubaldo+"</h4></center>");
$('body').append("<center><h6>Ubaldo @ 2019 COPYRIGHT</h6></center>");
    var uno=0,dos=0,tres=0,cuatro=0,cinco=0,seis=0,siete=0,ocho=0,nueve=0;
    function verificar()
    {
        if((uno+dos+tres)=='6')
        {
            Ganador();
          }

        if((cuatro+cinco+seis)=='15')
        {
            Ganador();
        }

        if((siete+ocho+nueve)=='24')
        {
            Ganador();
        }

        if((uno+cuatro+siete)=='12')
        {
            Ganador();
        }

        if((dos+cinco+ocho)=='15')
        {
            Ganador();
        }

        if((tres+seis+nueve)=='18')
        {
            Ganador();
        }

        if((uno+cinco+nueve)=='15')
        {
            Ganador();
        }

        if((tres+cinco+siete)=='15')
        {
            Ganador();
        }

    }
    function Ganador()
    {
        alert("GANASTES!!")
    }
    function Perdedor()
    {
        alert("HAS PERDIDO!!!! :(")
    }
    function Compu()
    {
        var i=0;
        do{
        var x=Math.floor(Math.random() * 10);
        if (x== '1' && uno==0)
        {
            $("#1").addClass("bg-warning text-white");
            $("#1").text('O');
            verificar();
            i=1;
        }
        if (x=='2' && dos==0)
        {
            $("#2").addClass("bg-warning text-white");
            $("#2").text('O');
            verificar();
            i=1;
        }
        if (x=='3' && tres==0)
        {
            $("#3").addClass("bg-warning text-white");
            $("#3").text('O');
            verificar();
            i=1;
        }
        if (x=='4' && cuatro==0)
        {
            $("#4").addClass("bg-warning text-white");
            $("#4").text('O');
            verificar();
            i=1;
        }
        if (x=='5' && cinco==0)
        {
            $("#5").addClass("bg-warning text-white");
            $("#5").text('O');
            verificar();
            i=1;
        }
        if (x=='6' && seis==0)
        {
            $("#6").addClass("bg-warning text-white");
            $("#6").text('O');
            verificar();
            i=1;
        }
        if (x=='7' && siete==0)
        {
            $("#7").addClass("bg-warning text-white");
            $("#7").text('O');
            verificar();
            i=1;
        }
        if (x=='8' && ocho==0)
        {
            $("#8").addClass("bg-warning text-white");
            $("#8").text('O');
            verificar();
            i=1;
        }
        if (x=='9' && nueve==0)
        {
            $("#9").addClass("bg-warning text-white");
            $("#9").text('O');
            verificar();
            i=1;
        }
        }while(i!=1)
    }
        $("#1").click(function()
        {
            if(uno==0)
            {
            uno=1;
            $("#1").addClass("bg-dark text-white");
            $("#1").text('X');
            verificar();
            Compu();
            }
        })
        $("#2").click(function()
        {
            if(dos==0){
            dos=2;
            $("#2").addClass("bg-dark text-white");
            $("#2").text('X');
            verificar();
            Compu();
            }
        })
        $("#3").click(function()
        {
            if(tres==0){
            tres=3;
            $("#3").addClass("bg-dark text-white");
            $("#3").text('X');
            verificar();
            Compu();
            }
        })
        $("#4").click(function()
        {
            if(cuatro==0){
            cuatro=4;
            $("#4").addClass("bg-dark text-white");
            $("#4").text('X');
            verificar();
            Compu();
            }
        })
        $("#5").click(function()
        {
            if(cinco==0){
            cinco=5;
            $("#5").addClass("bg-dark text-white");
            $("#5").text('X');
            verificar();
            Compu();
            }
        })
        $("#6").click(function()
        {
            if(seis==0){
            seis=6;
            $("#6").addClass("bg-dark text-white");
            $("#6").text('X');
            verificar();
            Compu();
            }
        })
        $("#7").click(function()
        {
            if(siete==0){
            siete=7;
            $("#7").addClass("bg-dark text-white");
            $("#7").text('X');
            verificar();
            Compu();
            }
        })
        $("#8").click(function()
        {
            if(ocho==0){
            ocho=8;
            $("#8").addClass("bg-dark text-white");
            $("#8").text('X');
            verificar();
            Compu();
            }
        })
        $("#9").click(function()
          {
            if(nueve==0)
            {
            nueve=9;
            $("#9").addClass("bg-dark text-white");
            $("#9").text('X');
            verificar();
            Compu();
            }
        })
        /*$("#reset").click(function()
          {
            $("#1,#2,#3,#4,#5,#6,#7,#8,#9").removeClass( "bg-dark bg-warning text-white" )
            $("#1,#2,#3,#4,#5,#6,#7,#8,#9").addClass("boton")
            $("#1,#2,#3,#4,#5,#6,#7,#8,#9").text('-')
          })*/

});
