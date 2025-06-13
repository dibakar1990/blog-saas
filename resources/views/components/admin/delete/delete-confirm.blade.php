<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
  
    $(document).on('click', '.deleteConfirm', function (e) {
      e.preventDefault();
      let url = $(this).attr('data-action-url');
      let id = $(this).attr('data-id');
      Swal.fire({
        text: "Are you sure you deleted it?",
        icon: "question",
        iconColor: '#f27474',
        confirmButtonText: "Yes",
        confirmButtonColor: '#e3342f',
        customClass: {
            confirmButton: "btn btn-danger me-2 waves-effect waves-light",
            cancelButton: "btn btn-outline-secondary waves-effect"
        },
        showClass: {
            popup: `
            animate__animated
            animate__fadeInUp
            animate__faster
            `
        },
        hideClass: {
            popup: `
            animate__animated
            animate__fadeOutDown
            animate__faster
            `
        },
        buttonsStyling: !1
      }).then((willDelete) => {
        
        if (willDelete.dismiss !='cancel') {
            $.ajax({
                url:url,
                data : {'_method' : 'DELETE'},
                type:"POST",
                success: function(res) {
                    if(res.response.status == true){ 
                        Swal.fire({
                            icon: "success",
                            title: res.response.title,
                            text: res.response.success_msg,
                            customClass: {
                                confirmButton: "btn btn-primary waves-effect"
                            },
                            showClass: {
                                popup: `
                                animate__animated
                                animate__fadeInUp
                                animate__faster
                                `
                            },
                            hideClass: {
                                popup: `
                                animate__animated
                                animate__fadeOutDown
                                animate__faster
                                `
                            },
                            timer: 2000
                        }).then((isConfirmed) => {
                            window.location.reload();
                        });
                    }
                }    
            });
        }else{
            Swal.fire({
                title: "Cancelled",
                text: "Delete Cancelled!!",
                icon: "error",
                customClass: {
                    confirmButton: "btn btn-primary waves-effect"
                },
                showClass: {
                    popup: `
                    animate__animated
                    animate__fadeInUp
                    animate__faster
                    `
                },
                hideClass: {
                    popup: `
                    animate__animated
                    animate__fadeOutDown
                    animate__faster
                    `
                },
            })
        }
      });
    });
  </script>