$(function () {
    $('#form-compras').validate({
      rules: {
        fecha_venta: {
          required: true,
          date: true
        },
        id_boleto: {
          required: true,
        },
        cantidad: {
          required: true,
          number: true,
        },
        metodo_pago: {
          required: true,
        },
      },
      messages: {
        fecha_venta: {
          required: "Por favor introducir la fecha de venta",
        },
        id_boleto: {
          required: "Por favor de elegir el boleto",
        },
        cantidad: {
          required: "Por favor introducir la cantidad de boletos",
        },
        metodo_pago: {
          required: "Por favor de introducir el metodo de pago"
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


