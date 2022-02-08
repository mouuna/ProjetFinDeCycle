
function formatDate(date) {
    var d = new Date(date),
        month = '' + (d.getMonth() + 1),
        day = '' + d.getDate(),
        year = d.getFullYear();

    if (month.length < 2) 
        month = '0' + month;
    if (day.length < 2) 
        day = '0' + day;

    return [year, month, day].join('-');
}

var date = new Date();
var jours = [];
var inp = document.querySelectorAll(".date")

for (var i = 0; i< 8; i++) {
     jours.push(date + i);
}

for (var i = 0; i< 8; i++) {
    console.log(jours[i]);
    inp[i].value = jours[i];
}



// date.setDate(date.getDate() + 20);

// console.log(formatDate(date));

// var date = document.querySelectorAll(".date");

// for (var i = 0; i<=7; i++) {
//     date[i].value = jours[i];
// }
