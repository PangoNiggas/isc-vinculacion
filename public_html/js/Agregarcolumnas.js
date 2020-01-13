	var i = 0; 
	var fila;
	$(document).ready(function(){	
		$("#btnNuevointegrante").click(function(){
		i += 1;

		if (i < 6) {
			fila='<tr id="fila'+i+'"> <td><input type="text" name="ApellidoPC'+i+'"  class="form-control infoemprendedor"></td> <td><input type="text" name="ApellidoMC'+i+'"  class="form-control infoemprendedor"></td><td><input type="text" name="NombreC'+i+'"  class="form-control infoemprendedor"></td> <td><input type="text" name="CURPC'+i+'"  class="form-control infoemprendedor"> </td></tr>';
			$('#integrantes').append(fila);
		} else {
			Swal.fire(
				'Solo puedes agregar 5 integrantes!',
				'Clic en el boton!',
				'warning'
			  )
		}
	});

	var b = 0; 
	function sumador () {
		b += 1;
	}

	$("#compet").click(function(){
		sumador();
		if (b < 10) {
			var fila1='<tr><td><input type="text" name="nombrecompe'+b+'"  class="form-control infoemprendedor"></td><td colspan="2"><input type="text" name="giro'+b+'"  class="form-control infoemprendedor"></td> <td><input type="text" name="direccioncompe'+b+'"  class="form-control infoemprendedor"> </td></tr>';
			$('#competencia').append(fila1);
		} else {
			Swal.fire(
				'Solo puedes agregar 10 Competencia!',
				'Clic en el boton!',
				'warning'
			  )
		}
		
	});

	var a = 0; 
	function contadorr () {
		a += 1;
	}
	$("#client-pot").click(function(){
		contadorr();
		if (a < 10) {
			var fila2='<tr><td><input type="text" name="nombreclien'+a+'"  class="form-control infoemprendedor"></td><td colspan="2"><input type="text" name="giroclien'+a+'"  class="form-control infoemprendedor"></td> <td><input type="text" name="direccionclien'+a+'"  class="form-control infoemprendedor"> </td></tr>';
			$('#clientes').append(fila2);
		} else {
			Swal.fire(
				'Solo puedes agregar 10 Clientes Potenciales!',
				'Clic en el boton!',
				'warning'
			  )
		}
		
	});

	$('#TipoPersona').change(function() {
			if($('#TipoPersona option:selected').val() == 1) {
           	  $('#persona-fisica').show();  
           	  	$('#persona-moral').hide();              
             }
              else if($('#TipoPersona option:selected').val() == 2) { 
              	$('#persona-fisica').hide();
              	$('#persona-moral').show(); 
              }
          });

});

