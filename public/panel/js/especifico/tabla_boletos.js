$('#table-boletos').DataTable({
    // "responsive": true, "lengthChange": false, "autoWidth": false,
    "paging": true,
    "lengthChange": false,
    "searching": true,
    "ordering": true,
    "info": true,
    "autoWidth": false,
    'processing': true,
    "responsive": true,
    // "scrollX": true,
    "language": {
        "lengthMenu": "Mostrar _MENU_ datos",
        "info": "Página _PAGE_ de _PAGES_",
        "infoEmpty": "Datos no disponibles por el momento",
        "processing":     "Procesando ...",
        "search":         "Buscar:",
        "zeroRecords":    "Datos no disponibles por el momento",
        "paginate": {
        "first":      "Primera",
        "last":       "Última",
        "next":       "Siguiente",
        "previous":   "Anterior"
        },
    }//End language
});

$(document).on('click', '.estatus', function() {
    let elemento = $(this).attr('id');
    let id = elemento.split('_')[0];
    let estatus = elemento.split('_')[1];
    let array = [id, estatus, ' a este boleto', 'Este acción será permanente.'];
    let url = path + '/estatus_boleto/' + id + '/' + estatus;
    cambiar_estatus(url, array, 'warning');
})

$(document).on('click', '.eliminar', function() {
    let id = $(this).attr('id');
    let array = [' al boleto', 'Este acción será permanente.' ];
    let url = path + '/eliminar_boleto/' + id;
    eliminar(url, array, 'warning');
})

