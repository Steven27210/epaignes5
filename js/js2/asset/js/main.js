var btn = document.getElementById('btn')
var counter = document.getElementById('counter')

var click = 0
btn.addEventListener('click', function(e) {
  e.preventDefault()
  // incrementer click
  click++
  // remplacer le texte de mon counter
  counter.innerHTML = click
})
