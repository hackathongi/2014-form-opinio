$().ready(function()
{
	$(".rating").bind('click', rate);
	$( "#rateForm" ).submit(submit);
	$(function () { $("input,select,textarea").not("[type=submit]").jqBootstrapValidation(); } );
	
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
        }
    });
	
});

function renderComanda(comanda)
{
	var template = "<h1>{{title}}</h1><p>{{description}}</p>";
	var html = Mustache.to_html(template, person);
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


function submit()
{
	event.preventDefault();
	
}