"use strict";
document.addEventListener("DOMContentLoaded", function(e) {
    {
        
        
        let e = document.getElementById("uploadedAvatar");
        const r = document.querySelector(".account-file-input"),
            u = document.querySelector(".account-image-reset");
        if (e) {
            const d = e.src;
            r.onchange = () => {
                r.files[0] && (e.src = window.URL.createObjectURL(r.files[0]))
            }, u.onclick = () => {
                r.value = "", e.src = d
            }
        }
    }
}), $(function() {
    var e = $(".select2");
    e.length && e.each(function() {
        var e = $(this);
        select2Focus(e), e.wrap('<div class="position-relative"></div>'), e.select2({
            dropdownParent: e.parent()
        })
    })
});

$(function(){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('#formAccountSettings').validate({
        ignore: [],
        debug: false,
        rules: {
            name: {
                required: true,
            },
            email: {
                required: true,
                email:true,
            },
            userName: {
                required: true,
            },
            phone: {
                required: true,
                digits:true,
                maxlength: 11,
                minlength: 10,
            }
        },
        messages: {
            name: {
                required: "This field is required",
            },
            email: {
                required: "This field is required",
            },
            userName: {
                required: "This field is required",
            },
            phone: {
                required: "This field is required",
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
    
    jQuery.validator.addMethod("strongPassword", function(value, element){
        return /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[^a-zA-Z\d]).{6,}$/.test(value);
          
      }, "The :password requriement does not match.");
  
      $('#formChangePassword').validate({
            ignore: [],
            debug: false,
            rules: {
            currentPassword: {
                    required: true,
                },
                newPassword: {
                    required: true,
                    strongPassword: true,
                },
                confirmPassword: {
                    required: true,
                    equalTo:"#newPassword"
                }
                
            },
            messages: {
            currentPassword: {
                    required: "This field is required",
                },
                newPassword: {
                    required: "This field is required",
                },
                confirmPassword: {
                    required: "This field is required",
                }
            },
            errorElement: 'span',
            errorPlacement: function (error, element) {
            error.addClass('invalid-feedback');
            element.closest('.input-group').append(error);
            },
            highlight: function (element, errorClass, validClass) {
            $(element).addClass('is-invalid');
            },
            unhighlight: function (element, errorClass, validClass) {
            $(element).removeClass('is-invalid');
            }
        });
});