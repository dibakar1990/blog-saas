$(document).ready(function () {
    toastr.options = {
        "closeButton": true,
        "newestOnTop": false,
        "progressBar": true,
        "positionClass": "toast-top-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    }

    $(document).on('click', '.openPopup', function(){
        let url = $(this).attr('data-action-url');
        var title = $(this).attr('data-title');
        console.log(url, title);
        // AJAX request
        $.ajax({
            url: url,
            type: 'get',
            beforeSend: function(){
                ajaxindicatorstart();
            },
            success: function (res) {
                //console.log(res.response);
                ajaxindicatorstop();
                $('#dynamicAjaxModalBody').html(res.response);
                $('#ajaxModalLabel').html(title);
                $("#ajaxModal").modal('show');
            }
        });
       
    });
});


function deleteConfirm(route, modalBody, modalTtile){
    $('#deleteConfirmLabel').html(modalTtile);
    $('#deleteModalBody').html(modalBody);
    $(document).find('#deleteForm').attr('action',route);
}

function checkall(){
    var id=[];
    if ($("#multi_check").is(':checked')) {
      $(".single_check").each(function () {
          $(this).prop("checked", true);
      });    
    } else {
      $(".single_check").each(function () {
          $(this).prop("checked", false);
      });
    }
}

$(document).ready(function(){
   
    $(document).on('click', '.single_check', function() { 
      $("#multi_check").prop("checked", false);
            var i = 0;
        $(".single_check").each(function () {
            if(!$(this).is(':checked')) {
                i = 1;
            }
        });
        if(i == 0){
            $("#multi_check").prop("checked", true);
        }
     });

     $('#select_action').change(function(){ 
        var action_value = $(this).val();
       
        if(action_value !=''){
          $('#apply_action').removeClass('disabled');
        }else{
          $('#apply_action').addClass('disabled');
        }
    });

    $(document).on('click', '.applyAction', function() { 
        
      var actionUrl = $(document).find('.actionUrl').val();
      var action_value = $('#select_action option:selected').val();
      var ids = [];
      $.each($("input[name='single_check']:checked"), function(){
          ids.push($(this).val());
      });

      if($.isEmptyObject(ids)) {
        toastr.error('Please Checked At lest One item');
      }else{
          $.ajax({
              headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              },
              type: "POST",
              url: actionUrl,
              data: {action_value:action_value,ids:ids},
              beforeSend: function(){
                  ajaxindicatorstart();
              },
              success: function (res) {
                //console.log(res.response.response);
                  ajaxindicatorstop();
                  if(res.response.status==true){
                    toastr.error(res.response.success_msg);
                    
                    setTimeout(function(){
                        window.location.href=res.response.response;
                      }, 1500);
                  
                  }
              }
          });
      }
    });
});



