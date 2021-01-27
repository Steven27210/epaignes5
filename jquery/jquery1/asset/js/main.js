document.addEventListener('DOMContentLoaded', function(){
  console.log('ok, dom chargé')
});
//alert('ok 1')
$(document).ready(function(){
  //alert('ok 2')
  console.log('ok, dom chargé verifié avec jquery')
});
//alert('ok 3')

$(function(){
  console.log('ok, dom chargé verifié avec jquery')
})

var divjs = document.getElementById('titreCV')
console.log(divjs)
var div = $('#titreCV')
console.log(div)
//$('.titre')[0]
$('.titre:first')
//$('#header nav ul li a');
// selection des descendants directs, enfants
$('#monUl li ul').children().css('background-color','red')
$('#monUl').children('.item3').css('background-color','blue')
$('#monUl').children().eq(0).css('background-color','green')
// find  =>tous les descendants => enfant s, petits enfant etc ...
$('.wrap').find('h2.titreSection').css({
  'background-color': 'green',
  'color': 'yellow'
});
// voisins
$('.head').next().next().css('color', 'red')
$('.head').prev().css('opacity', '.4')
// parent
$('#age').parent().css('font-weight','bold')
//recupere le contenu d'une boite
var titre = $('#titreCV').html()
console.log(titre)
// remplacer le contenu de la boite
$('#titreCV').html('Full Stack')
$('#titreCV').after('<p>Après le titre</p>')
$('#titreCV').before('<p>Avant le titre</p>')
$('#titreCV').append(' Super')
$('#titreCV').prepend('topmega ')
  // entoure l'élément sélectionné
$('#titreCV').wrap('<section class="newdiv"></section>')
// entoure les enfants de l'elements sélectionné
$('.head').wrapInner('<section class="innerdiv"></section>')

//$('.class1.class2')
//$('.class3 .class4')
// $('ul#dede.class12')
//$('*') // sélectionne tous les elements du DOM => body et head inclus
let el = $('.wrap').find('h2.titreSection');
el.addClass('maclass')
el.removeClass('maclass')
el.toggleClass('maclass')
if(el.hasClass('maclass')) {
  console.log('oui la classe est presente dans tous mes titres')
} else {
  console.log('pas de class maclass')
}
// $('.titreSection').css({
//   'border'           : '1px solid red',
//   'color'            : 'lime',
//   'background-color' : 'grey',
// })
//

let boite = $('#boite');
// hauteur sans le padding et sans le border
console.log('height: ' + boite.height()) // 240
// hauteur sans le border
console.log('Innerheight: ' + boite.innerHeight()) // 280
// hauteur avec padding et border
console.log('outerheight: ' + boite.outerHeight()) // 300
// + le margin
console.log('outerheight(true): ' + boite.outerHeight(true)) // 360
//
console.log('width: ' + boite.width());
console.log('innerWidth: ' + boite.innerWidth());
console.log('outerWidth: ' + boite.outerWidth());
console.log('outerWidth(true): ' + boite.outerWidth(true));

// position par rapport à l'element parent
let position = boite.position()
console.log(position)
console.log('top : ' + position['top'])
console.log('left : ' + position.left)
// relatif au document générale
$(window).on('resize', function(){
  let offset = boite.offset()
  //console.log(offset)
  console.log('offset => top: ' + offset.top)
  console.log('offset => left: ' + offset.left)
});
//
$('#boite').on('mousemove', function(event){
  $('#log').html('<p>X: ' + event.pageX + ' & Y: ' + event.pageY + '</p>')
})

$('#boite').on('click', function(){
  // changer la couleur de la boite
  $(this).css('background-color', 'yellow');
  // faire disparaitre l'image
  //$('img.photo').css('display', 'none');
  $('img.photo').fadeOut(2000, function(){
    $('img.photo').fadeIn(2000, function() {
      $('#boite').css('background-color', 'white');
    });
  });
})

$('.para:empty').css({
  'background-color': 'lime',
  'height': '30px'
})
//.html('texte ajouté au para vide')
$('.para:parent').css('background-color','yellow')
// h1, h2, ...; h6
$(':header').css('font-size', '100px')
// h2 qui ont propriété display != none
$('h2:visible').css('font-weight', '700')
// h2 qui ont propriété display = none
$('h2:hidden').css('font-weight', '700')

//
$('#btnclick').on('click', function(e) {
  e.preventDefault()
  if($(this).hasClass('hideboite')) {
    $('#boite').fadeIn(200)
    $(this).removeClass('hideboite').html('Click ici pour faire disparaitre la boite')
  } else {
    $('#boite').fadeOut(200)
    $(this).addClass('hideboite').html('click ici pour faire apparaitre la boite')
  }
});


$('.photo').on('click', function() {
  $(this).animate({
    top: '+=100',
    right: '+=200'
  }, 1000,'easeOutBounce', function(){
    $(this).animate({
      top: '-=100',
      // right: '-=200'
    }, 100,'easeInOutElastic',  function(){
      $(this).animate({
        right: '-=200'
      }, 1000,'easeOutBounce')
    })
  })
});

$('.titreSection').on('click', function(){
  if($(this).hasClass('good')) {
    $(this).css('background-color','green')
  } else {
    $(this).css('background-color','grey')
  }
  $(this).toggleClass('good')
})



//
