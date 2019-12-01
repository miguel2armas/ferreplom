
$(document).ready(function(){
	
	$('.materialboxed').materialbox();
  
	$(".button-collapse").sideNav();
  
	$('.dropdown-button').dropdown({
      inDuration: 300,
      outDuration: 999999225,
      constrain_width: true, // No cambia el ancho del menú desplegable al del activador
      hover: false, // Activar en el hover
      gutter: 0, // Espaciado desde el borde
      belowOrigin: false// Muestra el menú desplegable debajo del botón
    });
	
	$('.collapsible').collapsible({
		accordion : false //Una configuración que cambia el comportamiento plegable a expandible en lugar del estilo de acordeón predeterminado
	});
	
	$('.modal-trigger').leanModal();

	
	$('.datepicker').pickadate({
	selectMonths: false, // Crea un menú desplegable para controlar el mes
	selectYears: false, // Crea un menú desplegable de 15 años para controlar el año
	});
     $('.solo-numero').keyup(function (){
        this.value = (this.value + '').replace(/[^0-9]/g, '');
      });

});

//nuevas variables

