function verifText(id_input,min = 3,max = 20)
{
  var champ = document.getElementById(id_input)
  var error = document.getElementById('error' + id_input);
  var success = document.getElementById('success' + id_input);

  var str = champ.value;
  var longueur = str.length

  error.innerHTML = ''
  success.innerHTML = ''

  if(longueur != 0) {
    if(longueur < min) {
      error.innerHTML = 'min ' + min + ' caractères';
    } else if (longueur > max) {
      error.innerHTML = 'max ' + max + ' caractères';
    } else {
      success.innerHTML = 'BRAVO vous avez renseigner ' + longueur + ' caractères';
    }
  } else {
    error.innerHTML = 'veuillez renseigner ce champ';
  }
}
// creation d'une fonction à appeler dans le onchange du select
function verifSelectColorized()
{
  // verifier si cela marche (console.log()) à enlever ensuite
  console.log('ok')
  // cible mon select grace à son id
  var select = document.getElementById('fruits');
  var error = document.getElementById('errorfruits')
  console.log(select)
  // recupere la value de l'option choisit
  var value = select.value;
    // SI / SINON SI / SINON
    // if // elseif // else
  if(value == 'banane') {
    //select.style.backgroundColor = 'yellow';
    colorized(select,'yellow')
  } else if (value == 'kiwi') {
    //select.style.backgroundColor = 'green';
    colorized(select,'green','white')
  } else if (value == 'papaye') {
    //select.style.backgroundColor = 'orange';
    colorized(select,'orange')
  } else {
    //select.style.backgroundColor = 'white';
    colorized(select,'white','blue')
    error.innerHTML = 'Veuillez renseigner un fruit'
  }
}

function colorized(select,color, color2 = 'black')
{
  select.style.backgroundColor = color;
  select.style.color = color2;
}

function validation()
{
  verifText('nom')
  verifText('prenom',4,30)
  verifText('message',10,500)
  verifSelectColorized()
  // si pas d'error
    //return true;
  // sinon
    return false
}
