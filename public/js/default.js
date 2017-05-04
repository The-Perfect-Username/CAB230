

// var states = [
//     "Queensland",
//     "New South Wales",
//     "Australian Capital Territory",
//     "Victoria",
//     "South Australia",
//     "Western Australia",
//     "Northern Territory"
// ];
//
// console.log(states);


var showForm = function(e) {
    var id = e.getAttribute('rel');
    var el = document.getElementsByClassName("form-wrapper");
    for( var i = 0; i < el.length; i++) {
        el[i].style.display = "none";
    }
    document.getElementById(id).style.display = "block";
}

// for (var i = 0; i < 100; i++) {
//
//     if ((i % 3 === 0) && (i % 5 === 0)) {
//         console.log(i.toString() + " Fizz Fuzz");
//     } else if (i % 3 === 0) {
//         console.log(i.toString() + " Fizz");
//     } else if (i % 5 === 0) {
//         console.log(i.toString() + " Fuzz");
//     }
// }
