$(function(){
    $('#formTag').validate({
        ignore: [],
        debug: false,
        rules: {
            tag_name: {
                required: true,
            }
        },
        messages: {
            tag_name: {
                required: "The tag name field is required",
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