$(document).ready(function(){
  $('#logoburger').on('click', function(){
    $('#menu_responsive').fadeIn(500);
  })
  $('#times').on('click', function(){
    $('#menu_responsive').fadeOut(500);
  })

})


// window.onscroll = function(ev) {
//     if ((window.innerHeight + window.scrollY) >= document.body.offsetHeight) {
//         console.log('ok bottom')
//         if(!$('#content').hasClass('onedo')) {
//           for (var i = 237; i < 243; i++) {
//             $('#content').append('<img src="https://picsum.photos/id/'+i+'/200/300">')
//           }
//         }
//         $('#content').addClass('onedo')
//     }
// };
