$(function () {
    $('#form-metodoPago').validate({
      rules: {
        id_metodoPago: {
          required: true,
        },
        nombre_metodoPago: {
          required: true,
        },
        clave_metodoPago: {
          required: true,
          number: true,
        },
        dia_metodoPago: {
          required: true,
          number: true
        },
        year_metodoPago: {
          required: true,
        },
        cve_metodoPago: {
          required: true,
        },
      },
      messages: {
        id_metodoPago: {
          required: "Por favor introducir el metodo de pago",
        },
        nombre_metodoPago: {
          required: "Por favor de elegir el nombre ",
        },
        clave_metodoPago: {
          required: "Por favor introducir la clave",
        }, 
        dia_metodoPago: {
          required: "Por favor introducir el dia",
        },
        year_metodoPago: {
          required: "Por favor introducir el año",
        },
        cve_metodoPago: { 
            required: "Por favor introducir el cve"
        },
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


