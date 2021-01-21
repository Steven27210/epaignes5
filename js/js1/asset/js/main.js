// cibler un element par rapport à son id
var title = document.getElementById('js_cible');
console.log(title);

title.style.color = 'red';
title.style.backgroundColor = 'yellow';
title.style.marginLeft = '50px';
// cibler des element par rapport au nom de balise
var fruits = document.getElementsByTagName('li');
console.log(fruits);
console.log(fruits[1])
fruits[1].style.color = 'red'
fruits[2].style.color = 'green'
// cibler des element par rapport à une class
var grandTitre = document.getElementsByClassName('bigtitle');
console.log(grandTitre);
for (var i = 0; i < grandTitre.length; i++) {
  grandTitre[i].style.fontSize = '30px';
}
// aller chercher le contenu de la cible
console.log(title.innerHTML)
// changer le contenu
title.innerHTML = '<a href="#">nouveau titre super mega bien</a>'

function clickPerso()
{
  // cibler ce btn, changé le texte, color => blue , fontsize :70px
  let btn = document.getElementById('btnclick')
  btn.style.color = 'blue';
  btn.style.fontSize = '70px';
  btn.innerHTML = 'ok good';
  let ul = document.getElementsByTagName('ul');
  ul[0].innerHTML = '<li>liste vide</li>'
  ul[0].style.backgroundColor = 'red'
  console.log('ok')
}

function changeColor(celuila)
{
  console.log(celuila)
  celuila.style.color = 'red'
}

var infos = document.getElementById('news');
infos.addEventListener('mouseenter',function(){
  // console.log('ok ca marche!')
  infos.innerHTML = 'je rentre dans la boite'
  infos.style.color = 'green'
})
infos.addEventListener('mouseleave',function(){
  // console.log('ok ca marche!')
  infos.innerHTML = 'je sort dans la boite'
  infos.style.color = 'red'
})

infos.addEventListener('click',function(event){
  event.preventDefault()
  console.log(event)
  infos.innerHTML = 'je click dans la boite'
  infos.style.color = 'lime'
})
var test = document.getElementById('test');
test.addEventListener('click', function() {
  test.style.top = '150px';
  test.style.right = '180px';
})









//
