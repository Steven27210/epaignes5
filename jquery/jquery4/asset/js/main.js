$(document).ready(function(){
  $('#logoburger').on('click', function(){
    $('#menu_responsive').fadeIn(500);
  })
  $('#times').on('click', function(){
    $('#menu_responsive').fadeOut(500);
  })
})

// for (var i = 1; i <= 100; i++) {
//   console.log(i)
// }
// for (var i = 0; i <= 100; i+=5) {
//   console.log(i)
// }

$(window).on('load',function() {
  $('#diapo1').flexslider({
    controlNav: true,
    directionNav: true,
    slideshowSpeed: 15000,
    animation: "slide",
    // direction: "vertical",
    after: function(){
      console.log('dede')
    },
  });

  $('#diapo2').flexslider({
    animation: "slide",
    animationLoop: false,
    itemWidth: 400,
    itemMargin: 5,
    controlNav: false,
    directionNav: true,
  });
});

window.onscroll = function(ev) {
  if ((window.innerHeight + window.scrollY) >= document.body.offsetHeight) {
    console.log('ok bottom')
    if(!$('#content').hasClass('onedo')) {
      for (var i = 237; i < 243; i++) {
        $('#content').append('<img src="https://picsum.photos/id/'+i+'/200/300">')
      }
    }
    $('#content').addClass('onedo')
  }
};
