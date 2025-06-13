$(function(){
    $('#formSocialCreate').validate({
        ignore: [],
        debug: false,
        rules: {
            social_name: {
                required: true,
            },
            social_link: {
                required: true,
            }
        },
        messages: {
            social_name: {
                required: "The social name field is required",
            },
            social_link: {
                required: "The social link field is required",
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