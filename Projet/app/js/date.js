document.addEventListener('DOMContentLoaded', function() {
    var selectBoxes = document.querySelectorAll('select');
    M.FormSelect.init(selectBoxes);

    google.script.run.withSuccessHandler(populateDates).getCalendarBusyDays();
    });


function populateDates(disabledDays){
  var datePicker = document.getElementById('prefDate');
  M.Datepicker.init(datePicker,{
    disableDayFn: function(day){
      return disabledDays.indexOf(day.valueOf()) > -1 || day.valueOf() < new Date().valueOf();
    }
  });
}


  document.getElementById("btn").addEventListener("click",doStuff);
  document.getElementById("zip").addEventListener("input",getEstimate);

function doStuff(){

  var userInfo = {};
  userInfo.firstName = document.getElementById("fn").value;
  userInfo.lastName = document.getElementById("ln").value;
  userInfo.app = document.getElementById("app").value;
  userInfo.zip = document.getElementById("zip").value;
  userInfo.est = document.getElementById("est").value;
  userInfo.prefDate = document.getElementById("prefDate").value;

  google.script.run.userClicked(userInfo);

  document.getElementById("fn").value = "";
  document.getElementById("ln").value = "";
  document.getElementById("zip").value = "";
  document.getElementById("est").value = "";
  document.getElementById("prefDate").value = "";
  M.updateTextFields();
  
  var myApp = document.getElementById("app");
  myApp.selectedIndex = 0;
  M.FormSelect.init(myApp);
}

function getEstimate(){
  var zipCode = document.getElementById("zip").value;
  if(zipCode.length === 5){
      google.script.run.withSuccessHandler(updateEstimate).getCost(zipCode);
  }
}


function updateEstimate(cost){
  document.getElementById("est").value = cost;
  M.updateTextFields();
}