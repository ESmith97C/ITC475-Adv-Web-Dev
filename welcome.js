function updateTime(){
var today = new Date();

var hours = today.getHours();

hours = ((hours + 11) % 12 + 1);

var minutes = today.getMinutes();

var seconds = today.getSeconds();

var AmOrPM;

if (today.getHours() >= 12){AmOrPM = "PM";}
else{AmOrPM = "AM";}

var finalTime = hours + ":" + minutes + ":" + seconds + " " + AmOrPM;

document.getElementById('timeDisplay').innerHTML = finalTime;


if (today.getHours() <= 11){document.getElementById('greeting').innerHTML = "Good Morning";}  
else if (today.getHours() >= 12 && today.getHours() <= 17){document.getElementById('greeting').innerHTML = "Good Afternoon";}
else {document.getElementById('greeting').innerHTML = "Good Evening";}


if (today.getHours() >= 6 && today.getHours() <= 18){document.getElementById('sunmoon').src='images/sun.png'}
else {document.getElementById('sunmoon').src='images/moon.png'}
}
setInterval(updateTime,1000);
