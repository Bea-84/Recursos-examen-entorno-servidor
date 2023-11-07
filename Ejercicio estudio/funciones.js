
// Variable para realizar un seguimiento de los clics
var numClics = 0;

$("#inicio").click(function() {
    var nombre = $("#nombre").val(); // Obtener el nombre del campo de entrada

    // Enviar el nombre al servidor usando AJAX
    $.post("inicio.php", { usuario: nombre }, function(data) {
        $("#cont1").html(data);
    });
});

//-----------------------------------------------------------------------------------

$("#cierre").click(function(){

    $.get("cierre.php",function(data){
 
     $("#cont2").html(data); 
 
    });
 
 });

 //--------------------------------------------------------------------------------------

 $("#eliminar").click(function() {
    $.get("eliminar.php", function(data) {
        
        $("#cont3").html(data);
    });
});

 //---------------------------------------------------------------------------------

 $.get("contador.php?c", function(data) {
    numClics = parseInt(data); // Obtén el número de clics guardado en la cookie
    $("#cont4").html(numClics + " has pulsado");
 });


//-------------------------------------------------------------------------------------


$("#imagen").click(function() {
    numClics++;
    $("#cont4").html(numClics + " has pulsado");

    // Si el usuario ha hecho 5 clics, cambia la imagen
    if (numClics >= 5) {
        $("#imagen").attr("src", "Pollito.jpg");
    }
});


