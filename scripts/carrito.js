
var inicio=function () {
	$(".cantidad").keyup(function(e){
		if($(this).val()!=''){
			if(e.keyCode){
				var img=$(this).attr('data-img');
				var precio=$(this).attr('data-precio');
				var cantidad=$(this).val();
				var subtotal=(precio*cantidad);

				$(this).parentsUntil('.card').find('.subtotal').text('Sub: '+new Intl.NumberFormat("de-DE").format(subtotal));
				$.post('./scripts/modificarDatos.php',{
					Img:img,
					Cantidad:cantidad
				},function(e){
					$("#total").text('Total a Pagar: '+e);
				});
			}
		}
	});
$(".eliminar").click(function(e){
		e.preventDefault();
		var img=$(this).attr('data-img');
		$(this).parentsUntil('.col').remove();
		$.post('./scripts/eliminar.php',{
			Img:img
		},function(a){
			$("#total").text('Total a Pagar: '+a);
			if (a=='0'){
				location.href="./carritodecompras.php"
			}
		});
	});
}
$(document).on('ready',inicio);