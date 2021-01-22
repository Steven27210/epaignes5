setInterval(horloge,1000);
function horloge()
{
  // cibler toutes mes balises grace à leur id
  var joursemaine = document.getElementById('joursemaine')
  var day = document.getElementById('day')
  var mois = document.getElementById('mois')
  var annee = document.getElementById('annee')
  var hour = document.getElementById('hour')
  var minute = document.getElementById('minute')
  var second = document.getElementById('second')
  // Aller chercher l'heure
  var date = new Date();
  // joursemaine
  var semaine = ['Dimanche','Lundi','Mardi','Mercredi','Jeudi','Vendredi','Samedi'];
  joursemaine.innerHTML = semaine[date.getDay()]
  // day
  day.innerHTML = date.getDate()
  // mois
  var tableauMois = ['Janvier', 'Février','Mars', 'Avril','Mai','Juin', 'Juillet','Aout','Septembre', 'Octobre','Novembre','Décembre']
  mois.innerHTML = tableauMois[date.getMonth()]
  // annee
  annee.innerHTML = date.getFullYear()
  // hour
  var getHour = date.getHours()
  if(getHour < 10) {
    getHour = '0' + getHour
  }
  hour.innerHTML = getHour;
  // minute
  var getMinute = date.getMinutes()
  if(getMinute < 10) {
    getMinute = '0' + getMinute
  }
  minute.innerHTML = getMinute
  // second
  var getSecond = date.getSeconds()
  if(getSecond < 10) {
    getSecond = '0' + getSecond
  }
  second.innerHTML = getSecond
}
