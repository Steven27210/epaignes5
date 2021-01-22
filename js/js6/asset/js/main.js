function afficherDetail(morceau)
{
  // console.log(morceau.dataset.title)
  // console.log(morceau.dataset.artiste)
  // console.log(morceau.dataset.dateDeSortie)
  var html = '<h2>' + morceau.dataset.title + '</h2>';
  html += '<p>Artiste: ' + morceau.dataset.artiste + '</p>'
  html += '<p>Date de sortie : ' + morceau.dataset.dateDeSortie + '</p>'
  document.getElementById('infos').innerHTML = html
}

var annee = 2019

console.log('<div class="year">'+annee+'</div>')
