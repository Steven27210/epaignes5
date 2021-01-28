$(document).ready(function() {

    $('#contre').on('mouseover', function() {
      $(this).animate({
        'left':  Math.floor(Math.random() * 96) + '%',
        'top':  Math.floor(Math.random() * 96) + '%',
      },1)
    })

    $('#pour').on('click', function() {
      $('#reponse').fadeOut(300, function() {
        $('h1').fadeOut(300, function() {
          $('#success').fadeIn(2000);
        })
      })
    })

    $('#pour').on('mouseenter', function() {
      $('#pour').prepend('Bravo ')
    })
    $('#pour').on('mouseleave', function() {
      $('#pour').html('oui')
    })

});
