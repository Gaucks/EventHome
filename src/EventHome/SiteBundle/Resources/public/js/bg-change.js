$(window).resize(function(){ window.location.href=window.location.href});

$(document).ready(function(){
			
	$('img.bgfade').hide();
	var dg_H = $(window).height();
	var dg_W = $(window).width();
	$('#site').css({'height':dg_H,'width' :dg_W, position: 'fixed', 'z-index' :'-1', top:'0',left: '0'});
	
		function anim() {
		    $("#site img.bgfade").delay(5000).first().appendTo('#site').fadeOut(1500);
		    $("#site img").first().fadeIn(500);
		    setTimeout(anim, 8000);
		}
	anim();
});
