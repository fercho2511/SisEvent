// window.onload = initialize;


// //primero seria capturar en un array las sillas q estan ya vendidas o no
// var seats = [
//   {
//     name: "Adrián Ceniza",
//     seat: 1
//   },
//   {
//     name: "Antonio Gil",
//     seat: 2
//   },
//   {
//     name: "Adrián Lorenzo",
//     seat: 3
//   },
//   {
//     name: "felipe",
//     seat: 4
//   },
//   {
//     name: "Nobody",
//     seat: 5
//   },
//   {
//     name: "Nobody",
//     seat: 6
//   },
//   {
//     name: "Nobody",
//     seat: 7
//   },
//   {
//     name: "Nobody",
//     seat: 8
//   },
//   {
//     name: "Nobody",
//     seat: 9
//   },
//   {
//     name: "Nobody",
//     seat: 10
//   },
//   {
//     name: "Nobody",
//     seat: 11
//   },
//   {
//     name: "Nobody",
//     seat: 12
//   },
//   {
//     name: "Nobody",
//     seat: 13
//   },
//   {
//     name: "Nobody",
//     seat: 14
//   },
//   {
//     name: "Nobody",
//     seat: 15
//   },
//   {
//     name: "Nobody",
//     seat: 16
//   }
// ];


// //para luego proceder al pintado en caso de q no este reservada
// function initialize() {
//   var seatElements = document.getElementsByClassName("seat");
//   for(var i = 0; i < seatElements.length; i++){
//     showTooltipInfoSeat(seatElements[i]);
//   }

//   var formSeat = document.getElementById("form-seat");
//   formSeat.addEventListener("submit", addSeat);
// }