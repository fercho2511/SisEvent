// $(document).on("ready",inicio);







// $("#numSilla").change(function(){
//     var movInt = $('#numSilla').val()
//     $.ajax({
//         url:'http://localhost:9090/CodeIgniter/sistema1/index.php/usuario_per/mostrar',
//         method:'POST',
//         data: {movInt : movInt},
//         dataType:'html',
//         success:function(data){                   
//             $("#cantidad").append(data);
//         }
//     });
// });





// function inicio() {

//     mostrarDatos("");
//     $("#numSilla").keyup(function () {
//         buscar = $("#buscar").val();
//         mostrarDatos(buscar);

        
//     });




//     // $("form").submit(function (event) { 
//     //     event.preventDefault();
//     //     $.ajax({
//     //         type: $("form").attr("method"),
//     //         url: $("form").attr("method"),
//     //         data: $("form").serialize(),
//     //         success: function (respuesta) {
//     //             alert(respuesta);
                
//     //         }
//     //     });
        
//     // });
    
// }


// function mostrarDatos (valor) {
//     $.$.ajax({
//         type: "POST",
//         url: "<?php echo base_url();?>index.php/index.php/usuario_per/mostrar",
//         data: {buscar:valor},
//         // dataType: "dataType",
//         success: function (respuesta) {
//             alert(respuesta);
//         }
//     });
    
// }


// // function buscar_datos(consulta){
// //     $.ajax({
// //         type: "POST",
// //         url: "http://localhost:9090/CodeIgniter/sistema1/index.php/usuario_per/test#",
// //         data: "consulta:consulta",
// //         dataType: "html",
// //         success: function (response) {
// //             $("datos").html(respuesta);
// //         }
      
// //     });
// // }



 // provando otro metodo
//  let $silla = document.getElementById('numSilla')
//  let $cantidad = document.getElementById('cantidad')
//  function cargarSillas(sendDatos) {
//     $.ajax({
//         url: 'modelo/select.php',
//         type: 'POST',
//         data: sendDatos,
//         success: function(response) {
//             const respuestas = JSON.parse(response);
//             let template = '<option class="form-control" selected disabled>-- Seleccione --</option>'

//             respuestas.forEach(respuesta => {
//                 template += `<option class="form-control" value="${respuesta.codProvincia}">${respuesta.nomProvincia}</option>`;
//             })

//             $provincia.innerHTML = template;
//         }
//     })
// }


$departamento.addEventListener('change', () => {
    const codDepartamento = $departamento.value

    const sendDatos = {
        'codigoDepar': codDepartamento
    }
    
    cargarProvincias(sendDatos)

    $distrito.innerHTML = ''
})