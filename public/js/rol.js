//boton crar nuevo rol
$(document).ready( function() {
  var route ="/Rol";
    var token = $('#token').val();
  $('#agregar').click(function(){
    var id_dato = $('#id_rol_agregar').val();
    var nom_dato = $('#nombre_rol_agregar').val();
    $.ajax({
  url: route,
  headers: {'X-CSRF-TOKEN':token},
  type: 'POST',
  dataType: 'json',
  data:{id: id_dato,
        nombre: nom_dato
       }
});
});
});
//boton editar rol
$(document).ready(function(){
  var row;
  var id;
  var nombre;
  var ruta;
   $('.editar-btn').click(function(){
       row =$(this).parents('tbody');
       id = row.data('id');
       nombre = row.data('nombre');
     $('#id_rol_Editar').val(id);
     $('#nombre_rol_Editar').val(nombre);
      $('#EditarModalLabel').text('Editar Rol: '+id);
   });
   $('#editar_rol').click(function(){
     var id_dato=id;
     var nom_dato=$('#nombre_rol_Editar').val();
      ruta ="/Rol/"+id+"";
      var token = $('#token').val();
          $.ajax({
             url: ruta,
             headers: {'X-CSRF-TOKEN':token},
             type: 'PUT',
             dataType: 'json',
             data:{id: id_dato,
             nombre: nom_dato
              }
 });
 });
});
