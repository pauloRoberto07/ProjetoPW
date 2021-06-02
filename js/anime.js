// INICIO ANIMAÇÕA SCROLL\\
var $target = $('.anime'),
animationClass = 'anime-start',
offset = $(window).height() * 3/4;

function animeScroll() {
  var documentTop = $(document).scrollTop();

  $target.each(function(){
    var itemTop = $(this).offset().top;
    if (documentTop > itemTop - offset) {
      $(this).addClass(animationClass);
    } else {
      $(this).removeClass(animationClass);
    }
  });
}

animeScroll();

$(document).scroll(function(){
  animeScroll();
})
//FIM ANIMAÇÃO SCROLL\\

//INICIO DESCER SCROLL ANIMADO CONTATO\\
$('nav ul li a[href^="#contato"]').on('click', function(e) {
			e.preventDefault();
			var id = $(this).attr('href'),
			targetOffset = $(id).offset().top;
			
			$('html, body').animate({ 
				scrollTop: targetOffset - 100
			}, 1500);
		});
//FIM DESCER SCROLL ANIMADO\\