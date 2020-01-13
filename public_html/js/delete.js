$(document).ready(function(){

    
    $('.btn-delete').click(function(e){
        
        var row = $(this).parents('tr');
        var form = $(this).parents('form');
        var url = form.attr('action');
        Swal.fire({
            title: '¿Estas Seguro?',
            text: "No podras revertir esto!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            cancelButtonText: 'Cancelar!',
            confirmButtonText: 'Eliminarlo!'
          }).then((result) => {
            if (result.value) {
             
                $.post(url, form.serialize(), function(result){
                    row.fadeOut();
                    // $('#alert').html(result.message);
                    const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 3000
                      });
                      
                      Toast.fire({
                        type: 'success',
                        title: 'Se elimino correctamente'
                      })
                }).fail(function(){
                    Swal.fire(
                        'Algo salio mal!',
                        'error'
                      )
                })
              
            }
          })
      
    });



    $('.btn-delete1').click(function(e){
        
        var row = $(this).parents('tr');
        var form = $(this).parents('form');
        var url = form.attr('action');
        Swal.fire({
            title: '¿Estas Seguro?',
            text: "No podras revertir esto!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            cancelButtonText: 'Cancelar!',
            confirmButtonText: 'Eliminarlo!'
          }).then((result) => {
            if (result.value) {
             
                $.post(url, form.serialize(), function(result){
                    row.fadeOut();
                    Swal.fire({
                        position: 'top-end',
                        type: 'success',
                        title: 'Tu accion ha sido procesada',
                        showConfirmButton: false,
                        timer: 1500
                      })
                }).fail(function(){
                    Swal.fire(
                        'Algo salio mal!',
                        'error'
                      )
                })
              
            }
          })
       

    });




    
    $('.btn-asignar').click(function(e){
        
        var row = $(this).parents('tr');
        var form = $(this).parents('form');
        var url = form.attr('action');
        Swal.fire({
            title: 'Asignar asesor',
            text: "¿Estas Seguro? No podras revertir esto!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            cancelButtonText: 'Cancelar!',
            confirmButtonText: 'Asignarlo!'
          }).then((result) => {
            if (result.value) {
             
                $.post(url, form.serialize(), function(result){
                    Swal.fire({
                        position: 'top-end',
                        type: 'success',
                        title: 'Tu accion ha sido procesada',
                        showConfirmButton: false,
                        timer: 1500
                      })
                }).fail(function(){
                    Swal.fire(
                        'Algo salio mal!',
                        'error'
                      )
                })
              
            }
          })
   

    });



    $("#searchInput").change(function () {
        if(this.value != "all")
          {
        //split the current value of searchInput
        var data = this.value.split(" ");
        //create a jquery object of the rows
        var jo = $("#fbody").find("tr");
        if (this.value == "") {
            jo.show();
            return;
        }
        //hide all the rows
        jo.hide();
        
        //Recusively filter the jquery object to get results.
        jo.filter(function (i, v) {
            var $t = $(this);
            for (var d = 0; d < data.length; ++d) {
                if ($t.is(":contains('" + data[d] + "')")) {
                    return true;
                }
            }
            return false;
        })
        //show the rows that match.
        .show();
          }
        }).focus(function () {
        this.value = "";
        $(this).css({
            "color": "black"
        });
        $(this).unbind('focus');
        }).css({
        "color": "#C0C0C0"
        });

});