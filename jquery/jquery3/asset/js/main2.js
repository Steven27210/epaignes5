$(document).ready(function(){
  //var identifiant = 1;
  var tableau = []
  $('#submitted').on('click', function(e){
    e.preventDefault();
    $('#error').html('')
    var text = $('#input').val();
    if(text != '') {
       if( $.inArray(text, tableau) != -1) {
         $('#input').val('');
         $('#error').html('déjà renseigné')
       } else {
         tableau.push(text)
         $('#list').prepend('<li><input type="checkbox" />' + text + '<button class="btndelete">Delete</button></li>')
         $('#input').val('');
         eventDeleteBtn()
       }
    } else {
      $('#error').html('Veuillez renseigner le champ')
    }
  });
  $('#supcocher').on('click', function(){
    // cibler tous les checkbox qui sont cochés
    $('#list input:checked').parent().fadeOut(1000, function(){
      $(this).remove()
    })
  })

});

function eventDeleteBtn()
{
  $('.btndelete').on('click', function(){
    console.log('dede')
    $(this).parent().fadeOut(1000, function() {
      $(this).remove()
    })
  });
}





  // click sur btn submit
    // recupere la value ( val() ) de l'input de type text
    // cible mon ul pour ajouter un li qui contient la value

    // var text = '<li id="numero'+identifiant+'">button</li>
    // identifiant++;
