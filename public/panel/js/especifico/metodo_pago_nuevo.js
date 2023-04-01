  $(function () {
    $('#form-pago').validate({
      rules: {
        nombre_metodopago: {
          required: true,
        },
         clave_metodopago: {
           required: true,
         },
         dia_metodopago: {
           required: true,
           number: true,
         },
         year_metodopago: {
           required: true,
           number: true
         },
         cve_metodopago: {
           required: true,
           number: true
         }
      },
      messages: {
         nombre_metodoPago: {
          required: "Por favor introducir el nombre",
        },
        clave_metodoPago: {
          required: "Por favor introducir la clave",
        },
        dia_metodoPago: {
          required: "Por favor introducir el dia",
          number: "Introducir un dia valido"
        },
        year_metodopago: {
          required: "Por favor introducir el año",
          number: "introducir un año valido"
        },
        cve_metodoPago: {
          required: "Por favor introducir el cve",
          number: "Introducir un cve valido"
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
  });


