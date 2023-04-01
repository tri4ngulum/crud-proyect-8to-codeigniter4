$('#tabla-metodospago').DataTable({
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


$(document).on('click', '.eliminar', function() {
    let id = $(this).attr('id');
    let array = ['el metodo de pago ', 'Este acción será permanente.' ];
    let url = path + '/eliminar_metodopago/' + id;
    eliminar(url, array, 'warning');
})

