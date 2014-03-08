
$().ready(function()
{
	$(".rating").bind('click', rate);
	$( "#rateForm" ).submit(submit);
	
	$("#rateForm").validate({
        rules: {
            email:{
                minlength: 3,
                maxlength: 20,
                required: true
            }
        },
        highlight: function (element) {
            $(element).closest('.form-group').removeClass('has-success').addClass('has-error');
        },
        unhighlight: function (element) {
            $(element).closest('.form-group').removeClass('has-error').addClass('has-success');
        },
        messages: {
            email: {
              required: "Camp obligatori",
              email: "El correu ha de ser de la forma usuari@domini.cat"
            }
        }
    });
	//TODO eliminar para DEMO
	renderComanda({title: 'CMD 10133123012', description: 'Pedido realizado en amazon.com con un importe total de 1000$'})
});

function renderComanda(comanda)
{
	var template = "<h3>{{title}}</h3><p>{{description}}</p>";
	var html = Mustache.to_html(template, comanda);
	$('#dadesComanda').html(html);
}

function rate()
{
	$('#rating-value').val( $(this).attr('data-value'));
	
	//Marquem la seleccionada:
	$(".rating").removeClass('selected-rate');
	$(this).addClass('selected-rate');
	
	console.log($('#rating-value').val());
}
var userLang = navigator.language || navigator.userLanguage;
var lang_confirm = 'Les dades s\'han enviat correctament.';
switch (userLang)
{
	case 'es':
		jQuery.extend(jQuery.validator.messages, {
		    required: "Campo obligatorio.",
		    email: "Formato de correo incorrecto",
		    maxlength: jQuery.validator.format("Please enter no more than {0} characters."),
		    minlength: jQuery.validator.format("Please enter at least {0} characters."),
		    max: jQuery.validator.format("El campo debe ser inferior a {0} caracteres."),
		    min: jQuery.validator.format("El campo debe ser superior a {0} caracteres.")
		});
	
		lang_confirm = "Los datos se han enviado correctamente.";
		
	break;
	case 'ca':
		jQuery.extend(jQuery.validator.messages, {
		    required: "Camp obligatori.",
		    email: "Correu incorrecte. Exemple: usuari@domini.cat",
		    maxlength: jQuery.validator.format("Please enter no more than {0} characters."),
		    minlength: jQuery.validator.format("Please enter at least {0} characters."),
		    max: jQuery.validator.format("Please enter a value less than or equal to {0}."),
		    min: jQuery.validator.format("Please enter a value greater than or equal to {0}.")
		});
		
		lang_confirm = "Les dades s'han enviat correctament.";
	default:
		break;
}

function submit()
{
	console.log('hola');
	
	event.preventDefault();
	
	   $('#rateForm').hide();
	     $('div.container').append("<p class=\"confirm\">"+lang_confirm+"</p>");
	     /*
	$.ajax({ 
	   type: "GET",
	   dataType: "jsonp",
	   url: "http://localhost:8080/restws/json/product/get",
	   success: function(data){        
	     console.log(data);
	     $('#rateForm').hide();
	     $('div.container').append("<p class=\"confirm\">"+lang_confirm+"</p>");
	     
	   }
		
	});
	*/
}
