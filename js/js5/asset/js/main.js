function goHorloge()
{
  var date = new Date();
  document.getElementById('annee').innerHTML = date.getFullYear()
  document.getElementById('day').innerHTML = date.getDate()
  addHour(date.getHours(),'hour')
  addHour(date.getMinutes(),'minute')
  addHour(date.getSeconds(),'second')
  document.getElementById('joursemaine').innerHTML = getSemaine(date.getDay())
  document.getElementById('mois').innerHTML = getMois(date.getMonth())
}
function addHour(data,cible)
{
  if(data < 10) {data = '0' + data}
  document.getElementById(cible).innerHTML = data
}
function getSemaine(number)
{
  var semaine = ['Dimanche','Lundi','Mardi','Mercredi','Jeudi','Vendredi','Samedi'];
  return semaine[number]
}
function getMois(number)
{
  var tableauMois = ['Janvier', 'Février','Mars', 'Avril','Mai','Juin', 'Juillet','Aout','Septembre', 'Octobre','Novembre','Décembre']
  return tableauMois[number]
}
var horloge = setInterval(goHorloge, 1000)
