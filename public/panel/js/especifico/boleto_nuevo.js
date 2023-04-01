$(function () {
    $('#form-boleto').validate({
      rules: {
        nombre_boleto: {
          required: true,
        },
        precio_boleto: {
          required: true,
          number: true
        },
        fecha: {
          required: true,
          date: true
        }
      },
      messages: {
        nombre_boleto: {
          required: "Por favor introducir el nombre del boleto",
        },
        precio_boleto: {
          required: "Por favor introducir el precio del boleto",
          number: "Introducir un numero"
        },
        fecha: {
          required: "Por favor introducir una fecha",
          date: "Introducir fecha valida"
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

  
