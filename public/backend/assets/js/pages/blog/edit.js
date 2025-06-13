$(function(){
    $('.select2' ).select2( {
        width: $( this ).data( 'width' ) ? $( this ).data( 'width' ) : $( this ).hasClass( 'w-100' ) ? '100%' : 'style',
    });

    $('.summernote').summernote({
        height: 150,
    });

    $('select').each(function () {
        $(this).select2({
          
          width: 'style',
          placeholder: $(this).attr('placeholder'),
          allowClear: Boolean($(this).data('allow-clear')),
        });
      });

    $('#formNewsEdit').validate({
        ignore: [],
        debug: false,
        rules: {
            news_title: {
                required: true,
            },
            category: {
                required: true,
            },
            description: {
                required: true,
            },
            'tags[]': {
                required: true,
            }
        },
        messages: {
            news_title: {
                required: "The news title field is required",
            },
            category: {
                required: "The category field is required",
            },
            description: {
                required: "The news description field is required",
            },
            'tags[]': {
                required: "The tags field is required",
            }
        },
        errorElement: 'span',
        errorPlacement: function (error, element) {
        error.addClass('invalid-feedback');
        element.closest('.form-floating').append(error);
        },
        highlight: function (element, errorClass, validClass) {
        $(element).addClass('is-invalid');
        },
        unhighlight: function (element, errorClass, validClass) {
        $(element).removeClass('is-invalid');
        }
    });
});