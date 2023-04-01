$(function () {
    $('#form-compras').validate({
      rules: {
        id_usuario: {
          required: true,
        },
        id_venta: {
          required: true,
        },
        id_boleto:{
          required: true,
        },
        precio_boleto: {
          required: true,
          number: true,
        },
        cantidad: {
          required: true,
        },
        total_venta: {
          required: true,
        },
        fecha_venta: {
          required: true,
        },
        id_metodoPago: {
          required: true,
        },
      },
      messages: {
        id_boleto: {
          required: "Por favor introducir el boleto",
        },
        id_usuario: {
          required: "Por favor introducir el usuario",
        },
        id_venta: {
          required: "Por favor de elegir el boleto",
        },
        precio_boleto: {
          required: "Por favor introducir el precio del boleto",
        }, 
        cantidad: {
          required: "Por favor introducir la cantidad de boletos",
        },
        total_venta: {
          required: "Por favor introducir el total de venta",
        },
        year_venta: {
          required: "Por favor introducir la fecha",
        },
        id_metodoPago: {
          required: "Por favor de introducir el metodod de pago"
        }

      },
      errorElement: 'span',
      errorPlacement: function (error, element) {
        error.addClass('invalid-feedback');
        element.closest('.form-group').append(error);
      },
      highlight: function (element, errorClass, validClass) {
        $(element).addClass('is-invalid');
      },
      unhighlight: function (element, errorClass, validClass) {
        $(element).removeClass('is-invalid');
      }
    });
  })

