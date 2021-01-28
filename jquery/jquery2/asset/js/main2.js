$(document).ready(function(){

  // oui
  $('#pour').on('mouseenter', function() {
    $('#pour').prepend('Bravo ')
  })
  $('#pour').on('mouseleave', function() {
    $('#pour').html('OUI')
  })
  $('#pour').on('click', function() {
    $('#reponse').fadeOut(500, function(){
      $('h1').fadeOut(1000, function() {
        $('#success').fadeIn(1000);
      })
    })
  })
  // non
  $('#contre').on('mouseenter', function() {
    let number1 = Math.floor(Math.random() * 96)
    let number2 = Math.floor(Math.random() * 96)
    $(this).animate({
      'left':  number1 + '%',
      'top': number2 + '%',
    },1)
  })
});
