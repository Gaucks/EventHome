$('.content').hide();
$('.content').slideDown(2500);
$('#apl-me-form').hide();

$(document).ready(function(){


/* TOUTE CE QUI CONCERNE LE FORMULAIRE DE DEMANDE DE RAPPEL */



$('input#btn-contact').click(function (){
	$('#apl-me-form').slideDown('slow');
});


/*************************************************************/

// accessoire elle

$( "#form_acc_elle" )
		  .change(function () {
		    var str = "";
		    $( "#form_acc_elle option:selected" ).each(function() {
		      str += $( this ).text() + " ";
		    });
		    $( "span#form_acc_elle" ).text( str );
		      var elle       = parseInt($('span#form_acc_elle').text());
			  var lui        = parseInt($('span#form_acc_lui').text());
			  var enf        = parseInt($('span#form_acc_enf').text());
			  var deco       = parseInt($('span#form_deco').text());
			  var traiteur   = parseInt($('span#form_traiteur').text());
			  var photo      = parseInt($('span#form_photo').text());
			  var fleurs     = parseInt($('span#form_fleurs').text());
			  var dj         = parseInt($('span#form_dj').text());		  
			  var total      = conversion(elle)+conversion(lui)+conversion(enf)+conversion(deco)+conversion(traiteur)+conversion(fleurs)+conversion(photo)+conversion(dj); 
			  $('span.total-budget').text( total+'€' );
		    
		  })
		  .change();

//accessoire lui

$( "#form_acc_lui" )
		  .change(function () {
		    var str = "";
		    $( "#form_acc_lui option:selected" ).each(function() {
		      str += $( this ).text() + " ";
		    });
		    $( "span#form_acc_lui" ).text( str );
			  var elle       = parseInt($('span#form_acc_elle').text());
			  var lui        = parseInt($('span#form_acc_lui').text());
			  var enf        = parseInt($('span#form_acc_enf').text());
			  var deco       = parseInt($('span#form_deco').text());
			  var traiteur   = parseInt($('span#form_traiteur').text());
			  var photo      = parseInt($('span#form_photo').text());
			  var fleurs     = parseInt($('span#form_fleurs').text());
			  var dj         = parseInt($('span#form_dj').text());		  
			  var total      = conversion(elle)+conversion(lui)+conversion(enf)+conversion(deco)+conversion(traiteur)+conversion(fleurs)+conversion(photo)+conversion(dj);
			  $('span.total-budget').text( total+'€' );
		  })
		  .change();

//accessoire enfant

$( "#form_acc_enf" )
		  .change(function () {
		    var str = "";
		    $( "#form_acc_enf option:selected" ).each(function() {
		      str += $( this ).text() + " ";
		    });
		    $( "span#form_acc_enf" ).text( str );
		    
		      var elle       = parseInt($('span#form_acc_elle').text());
			  var lui        = parseInt($('span#form_acc_lui').text());
			  var enf        = parseInt($('span#form_acc_enf').text());
			  var deco       = parseInt($('span#form_deco').text());
			  var traiteur   = parseInt($('span#form_traiteur').text());
			  var photo      = parseInt($('span#form_photo').text());
			  var fleurs     = parseInt($('span#form_fleurs').text());
			  var dj         = parseInt($('span#form_dj').text());		  
			  var total      = conversion(elle)+conversion(lui)+conversion(enf)+conversion(deco)+conversion(traiteur)+conversion(fleurs)+conversion(photo)+conversion(dj);
			  $('span.total-budget').text( total+'€' );
			  
		  })
		  .change();

//accessoire déco

$( "#form_deco" )
		  .change(function () {
		    var str = "";
		    $( "#form_deco option:selected" ).each(function() {
		      str += $( this ).text() + " ";
		    });
		    $( "span#form_deco" ).text( str );
		    
		      var elle       = parseInt($('span#form_acc_elle').text());
			  var lui        = parseInt($('span#form_acc_lui').text());
			  var enf        = parseInt($('span#form_acc_enf').text());
			  var deco       = parseInt($('span#form_deco').text());
			  var traiteur   = parseInt($('span#form_traiteur').text());
			  var photo      = parseInt($('span#form_photo').text());
			  var fleurs     = parseInt($('span#form_fleurs').text());
			  var dj         = parseInt($('span#form_dj').text());		  
			  var total      = conversion(elle)+conversion(lui)+conversion(enf)+conversion(deco)+conversion(traiteur)+conversion(fleurs)+conversion(photo)+conversion(dj);
			  $('span.total-budget').text( total+'€' );
			  
		  })
		  .change();

// Invites

$( "#form_invites" )
		  .change(function () {
		    var str = "";
		    $( "#form_invites option:selected" ).each(function() {
		      str += $( this ).text() + " ";
		    });
		    $( "span#form_invites" ).text( str );
		    
			var elle       = parseInt($('span#form_acc_elle').text());
			  var lui        = parseInt($('span#form_acc_lui').text());
			  var enf        = parseInt($('span#form_acc_enf').text());
			  var deco       = parseInt($('span#form_deco').text());
			  var traiteur   = parseInt($('span#form_traiteur').text());
			  var photo      = parseInt($('span#form_photo').text());
			  var fleurs     = parseInt($('span#form_fleurs').text());
			  var dj         = parseInt($('span#form_dj').text());		  
			  var total      = conversion(elle)+conversion(lui)+conversion(enf)+conversion(deco)+conversion(traiteur)+conversion(fleurs)+conversion(photo)+conversion(dj);
			  $('span.total-budget').text( total+'€' );
			  
		  })
		  .change();

// Traiteur

$( "#form_traiteur" )
		  .change(function () {
		    var str = "";
		    $( "#form_traiteur option:selected" ).each(function() {
		      str += $( this ).text() + " ";
		    });
		    $( "span#form_traiteur" ).text( str );
		    var elle       = parseInt($('span#form_acc_elle').text());
			  var lui        = parseInt($('span#form_acc_lui').text());
			  var enf        = parseInt($('span#form_acc_enf').text());
			  var deco       = parseInt($('span#form_deco').text());
			  var traiteur   = parseInt($('span#form_traiteur').text());
			  var photo      = parseInt($('span#form_photo').text());
			  var fleurs     = parseInt($('span#form_fleurs').text());
			  var dj         = parseInt($('span#form_dj').text());		  
			  var total      = conversion(elle)+conversion(lui)+conversion(enf)+conversion(deco)+conversion(traiteur)+conversion(fleurs)+conversion(photo)+conversion(dj);
			  $('span.total-budget').text( total+'€' );
			  
		  })
		  .change();

// Fleuristes

$( "#form_fleurs" )
		  .change(function () {
		    var str = "";
		    $( "#form_fleurs option:selected" ).each(function() {
		      str += $( this ).text() + " ";
		    });
		    $( "span#form_fleurs" ).text( str );
		      
		      var elle       = parseInt($('span#form_acc_elle').text());
			  var lui        = parseInt($('span#form_acc_lui').text());
			  var enf        = parseInt($('span#form_acc_enf').text());
			  var deco       = parseInt($('span#form_deco').text());
			  var traiteur   = parseInt($('span#form_traiteur').text());
			  var photo      = parseInt($('span#form_photo').text());
			  var fleurs     = parseInt($('span#form_fleurs').text());
			  var dj         = parseInt($('span#form_dj').text());		  
			  var total      = conversion(elle)+conversion(lui)+conversion(enf)+conversion(deco)+conversion(traiteur)+conversion(fleurs)+conversion(photo)+conversion(dj);
			  $('span.total-budget').text( total+'€' );
			  
		  })
		  .change();

// Dj

$( "#form_dj" )
		  .change(function () {
		    var str = "";
		    $( "#form_dj option:selected" ).each(function() {
		      str += $( this ).text() + " ";
		    });
		    $( "span#form_dj" ).text( str );
		    
		      var elle       = parseInt($('span#form_acc_elle').text());
			  var lui        = parseInt($('span#form_acc_lui').text());
			  var enf        = parseInt($('span#form_acc_enf').text());
			  var deco       = parseInt($('span#form_deco').text());
			  var traiteur   = parseInt($('span#form_traiteur').text());
			  var photo      = parseInt($('span#form_photo').text());
			  var fleurs     = parseInt($('span#form_fleurs').text());
			  var dj         = parseInt($('span#form_dj').text());		  
			  var total      = conversion(elle)+conversion(lui)+conversion(enf)+conversion(deco)+conversion(traiteur)+conversion(fleurs)+conversion(photo)+conversion(dj);
			  $('span.total-budget').text( total+'€' );
			  
		  })
		  .change();

// Photographe

$( "#form_photo" )
		  .change(function () {
		    var str = "";
		    $( "#form_photo option:selected" ).each(function() {
		      str += $( this ).text() + " ";
		    });
		    $( "span#form_photo" ).text( str );
		    
		      var elle       = parseInt($('span#form_acc_elle').text());
			  var lui        = parseInt($('span#form_acc_lui').text());
			  var enf        = parseInt($('span#form_acc_enf').text());
			  var deco       = parseInt($('span#form_deco').text());
			  var traiteur   = parseInt($('span#form_traiteur').text());
			  var photo      = parseInt($('span#form_photo').text());
			  var fleurs     = parseInt($('span#form_fleurs').text());
			  var dj         = parseInt($('span#form_dj').text());		  
			  var total      = conversion(elle)+conversion(lui)+conversion(enf)+conversion(deco)+conversion(traiteur)+conversion(fleurs)+conversion(photo)+conversion(dj);
			  $('span.total-budget').text( total+'€' );
			  
		  })
		  .change();	  
})

function conversion(variable)
{
	
	if(!variable)
	{
		return 0;
	}
	else
	{
		return variable;
	} 
}

			
