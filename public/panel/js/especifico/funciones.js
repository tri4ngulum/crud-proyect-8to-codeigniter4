function cambiar_estatus(url="", data = Array(), typeMessage=""){
    let mensaje = (data[1] == '2') ? "habilitar" : "deshabilitar";

    Swal.fire({
        title: '¿Estás seguro de ' + mensaje + data[2] + '?',
        text: data[3],
        icon: typeMessage,
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si, continuar',
        cancelButtonText: 'Cancelar'
    }).then((result) => {
        if (result.isConfirmed) {
            window.location = url;
        }
    })
}


function eliminar(url = '', data= Array(), typeMessage = ''){
    Swal.fire({
        title: '¿Estás seguro de eiminar' + data[0] + ' ?',
        text: data[1],
        icon: typeMessage,
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si, continuar',
        cancelButtonText: 'Cancelar'
    }).then((result) => {
        if (result.isConfirmed){
            window.location = url;
        }
    })
}