var today = new Date();
var dd = today.getDate();
var mm = today.getMonth()+1; //January is 0!
var yyyy = today.getFullYear();
if(dd<10) {
  dd='0'+dd
}; 

if(mm<10) {
  mm='0'+mm
}; 

today = mm+'/'+dd+'/'+yyyy;
document.getElementById("demonew").innerHTML = "";
var myVar=setInterval(function(){myTimer()},1000);

function myTimer() {
    var d = new Date();
    document.getElementById("demo").innerHTML = d.toLocaleTimeString();
};

