$(function(){
    $('#formCategoryCreate').validate({
        ignore: [],
        debug: false,
        rules: {
            category_name: {
                required: true,
            }
        },
        messages: {
            category_name: {
                required: "The category name field is required",
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