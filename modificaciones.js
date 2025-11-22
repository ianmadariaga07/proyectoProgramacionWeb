function activarEdicion(id) {
    //Escondemos botones 
    $("#fila-" + id + " .btn-editar").hide();
    $("#fila-" + id + " .btn-eliminar").hide();
    $("#fila-" + id + " .btn-guardar").show();
    $("#fila-" + id + " .btn-cancelar").show();

    //Hacemos que las celdas sean editables
    $("#fila-" + id + " .editable").each(function() {
        var celda = $(this);
        var contenido = celda.text();
        var campo = celda.data("campo");

        celda.data("valor-original", contenido);
        celda.html('<input type="text" name="' + campo + '" value="' + contenido + '">');
    });
}

function cancelarEdicion(id) {
    //Restauramos botones
    $("#fila-" + id + " .btn-guardar").hide();
    $("#fila-" + id + " .btn-cancelar").hide();
    $("#fila-" + id + " .btn-editar").show();
    $("#fila-" + id + " .btn-eliminar").show();

    //Ponemos el texto original
    $("#fila-" + id + " .editable").each(function() {
        var celda = $(this);
        var original = celda.data("valor-original");
        celda.html(original);
    });
}

function guardarEdicion(id) {
    var fila = $("#fila-" + id);
    var datos = { id: id };

    fila.find("input").each(function() {
        var input = $(this);
        datos[input.attr("name")] = input.val();
    });

    $.ajax({
        url: 'logica/updateAjax.php', 
        type: 'POST',
        data: datos,
        success: function(respuesta) {
            if(respuesta.trim() == 'success') {
                fila.find(".editable").each(function() {
                    var inputVal = $(this).find("input").val();
                    $(this).html(inputVal); 
                });
                
                cancelarEdicion(id); 
                mostrarToast('Usuario actualizado correctamente');
            } else {
                alert("Error al guardar: " + respuesta);
            }
        },
        error: function() {
            alert("Error de conexión con el servidor");
        }
    });
}

function eliminarFila(id) {
    if(!confirm("¿Estás seguro de que deseas eliminar este alumno?")) return;

    $.ajax({
        url: 'logica/deleteAjax.php', 
        type: 'POST',
        data: { id: id },
        success: function(respuesta) {
            if(respuesta.trim() == 'success') {
                $("#fila-" + id).fadeOut(500, function(){ $(this).remove(); });
                mostrarToast('Usuario eliminado correctamente');
            } else {
                alert("Error al eliminar: " + respuesta);
            }
        }
    });
}

//Versiones nueva y antigua
function mostrarToast(mensaje) {
    if (typeof M !== 'undefined' && M.toast) {
        M.toast({html: mensaje}); 
    } else {
        Materialize.toast(mensaje, 4000); 
    }
}

