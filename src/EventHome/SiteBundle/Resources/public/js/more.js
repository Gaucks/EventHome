$('#all-inclus-block').hide();
$('p#all-inclus-moins').hide();
$('#all-at-card-block').hide();
$('p#all-at-card-moins').hide();

$(document).ready(function(){
	
	$('p#all-inclus').click(function() {
	
		$('div#all-inclus-block').slideDown('slow');
		$('p#all-inclus').hide();
		$('p#all-inclus-moins').show();
	
	});	
		
	$('p#all-inclus-moins').click(function() {
		$('div#all-inclus-block').slideUp('slow');
		$('p#all-inclus-moins').hide();
		$('p#all-inclus').show();
		
	});
	
	$('p#all-at-card').click(function() {
	
		$('div#all-at-card-block').slideDown('slow');
		$('p#all-at-card').hide();
		$('p#all-at-card-moins').show();
	
	});	
		
	$('p#all-at-card-moins').click(function() {
		$('div#all-at-card-block').slideUp('slow');
		$('p#all-at-card-moins').hide();
		$('p#all-at-card').show();
		
	});				
})