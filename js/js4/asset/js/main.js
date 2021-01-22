// 2000 ms
setTimeout(alertSystem, 2000);
function alertSystem()
{
  //alert('Alerte system');
  //console.log('Alerte system')
}

setInterval(repeatSystem,1000);
function repeatSystem()
{
  //console.log('repeatSystem')
}

// CHRONOS
var start = document.getElementById('start')
var stop = document.getElementById('stop')
var reset = document.getElementById('reset')
var counter = document.getElementById('counter')
var count = 0;
var chrono;

stop.addEventListener('click', function(){
  clearInterval(chrono);
  start.style.display = 'inline'
})

reset.addEventListener('click', function() {
  clearInterval(chrono);
  count = 0;
  counter.innerHTML = count
  start.style.display = 'inline'
})

start.addEventListener('click', function(){
  chrono = setInterval(goChronos,1000);
  start.style.display = 'none'
})

function goChronos()
{
  count++
  counter.innerHTML = count
  console.log('chronos')
}


var date = new Date();
console.log(date)

console.log(date.getFullYear())
console.log(date.getSeconds())
console.log(date.getDay())
console.log(date.getMonth())









//
