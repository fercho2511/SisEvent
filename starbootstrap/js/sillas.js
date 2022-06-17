


// $(function() {
//     /*Evitar funciones in line*/
//     $('#silla').on('change', function() {     
//         var x = $("#precio").val();
//         alert(x);
//   });


  $("#silla").change(function() {
    //var valor = $(this).val(); // Capturamos el valor del select
    var numero = document.getElementById("precio").value;
     var texto = $(this).find('option:selected').text();
     var total = (numero * texto);

    $("#precioTotal").val(`${total}`)
  
  });


// function miFunc(p2) {
//     let num=p2;
//      //alert( p2);
//     // document.getElementByID("sillaEvent").value=p2;
//     var cant = $("#numSilla").val(`${num}`)

//      numero = document.getElementById("numSilla").value; 
//         llamado(numero);
// }      


// function llamado(numero) {

   
//         alert("Escogio la mesa " +" "+ numero);
//                 var cantidad = numero;
//                 if (cantidad != '') {
//                     $.ajax({
                    
//                     url: "/index.php/cantidad_silla/get_mesa",
//                     type: "POST",
//                     data: {mesa: cantidad},
//                      //dataType: "ajax",
//                     success: function (respuesta) {
//                         alert(respuesta);
//                         $("#silla").html(data);
                    
//                     }
//                 })
//                 }
        
    
// }         





   
