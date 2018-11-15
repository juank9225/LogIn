$(document).ready(function(){

  $("#buscar").click(function(){



    $('#exampleModal').modal({show:true});

    $('#exampleModal .modal-body').html("cargando...");



    $.ajax({url: "http://localhost/LogIn/public/Usuario", success: function(result){
        $('#exampleModal .modal-body').html(result);


        $("tbody").click(function(){

            $("#nombre").val(   $(this).data('name')  );
              $("#nick").val(   $(this).data('nick')  );
                  $('#exampleModal').modal({show:false});
        })


      }});


  })


})
