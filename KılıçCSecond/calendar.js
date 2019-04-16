var dateIndex = 1;
showCalendar(dateIndex);


function plusDate(n) {
  showCalendar(dateIndex += n);
}


function showCalendar(n) {
  var i;
  var cal = document.getElementsByClassName("calendar");
  
  if (n > cal.length) {dateIndex = 1}
  if (n < 1) {dateIndex = cal.length}
  for (i = 0; i < cal.length; i++) {
    cal[i].style.display = "none";
  }
  cal[dateIndex-1].style.display = "block";
}