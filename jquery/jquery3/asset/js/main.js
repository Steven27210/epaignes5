var identifiant = 1;
$(document).ready(function() {
  $('#submitted').on('click', function(e) {
    e.preventDefault();
    ajouterALaListe()
  })
  $('#supcocher').on('click', function() {
    supprimerCocher()
  })
});

function supprimerCocher()
{
  $('#list li input:checked').parent().fadeOut(1000, function() {
    $('#list li input:checked').parent().remove();
  })
  // var lis = $('#list li');
  // for (var i = 0; i < lis.length; i++) {
  //   if($(lis[i]).children('input').is(':checked')) {
  //     $(lis[i]).fadeOut(1000, function() {
  //       $(lis[i]).remove()
  //     })
  //   }
  // }
}

function ajouterALaListe()
{
  var data = $('#input').val().trim()
  if(data != '') {
    var y = $('#list li span');
    var tableau = [];
    for (var i = 0; i < y.length; i++) {
      tableau.push($(y[i]).html())
    }
    if( $.inArray(data, tableau) != -1) {
      $('#input').val('');
      alert('Veuillez renseigner un élément qui n\'est pas dans la liste')
    } else {
      $('#list').prepend('<li id="li_'+identifiant+'"><input type="checkbox"><span>' + data + '</span><button onclick="supprimer('+identifiant+')">Delete</button></li>')
      $('#input').val('');
      identifiant++
    }
  } else {
    alert('Veuillez renseigner ce champ')
  }
}


function supprimer(numero)
{
  //console.log(numero)
  $('#li_'+numero).fadeOut(2000, function() {
    $('#li_'+numero).remove()
  })
}
