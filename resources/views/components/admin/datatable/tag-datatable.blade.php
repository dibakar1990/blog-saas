<script>
$(document).ready(function() {
    $('.select2' ).select2( {
        theme: "bootstrap4",
        width: $( this ).data( 'width' ) ? $( this ).data( 'width' ) : $( this ).hasClass( 'w-100' ) ? '100%' : 'style',
    });

    var datatableUrl = "{{ route('admin.tags.index') }}";
    var table = $('#dataTable').DataTable( {
      lengthChange: false,
      bInfo: false,
      bFilter:false,
      pageLength: 10,
      serverSide: true,
      processing: true,
      language: {
          processing: '<div class="spinner-border text-primary" role="status"> <span class="visually-hidden">Loading...</span></div>'
      },
      dom: 'Bfrtip',
      ajax: {
          url: datatableUrl,
          data: function (d) {
              d.status = $('#filter_status').val(),
              d.search = $('#searchbox').val()
          }
      },
      fnDrawCallback: function(oSettings) {
          if (oSettings._iDisplayLength > oSettings.fnRecordsDisplay()) {
              $(oSettings.nTableWrapper).find('.dataTables_paginate').hide();
          } else {
              $(oSettings.nTableWrapper).find('.dataTables_paginate').show();
          }
      },
      
      columns: [
          { data: 'DT_RowIndex', name: 'DT_RowIndex', visible: false, searchable: false, orderable: false },
          { data: "name", name: "name" },
          { data: "status", name: "status"},
          { data: "action", orderable: false, searchable: false, responsivePriority:2},
      ],
      createdRow: function(row, data, dataIndex) {
        $(row).addClass('tableRow ');
        if (dataIndex % 2 === 0) {
            $(row).addClass('group');
        } else {
            $(row).addClass('');
        }
      },
      columnDefs: [
        { targets: [1,2,3], orderable: false }
      ],
      buttons: [
        {
          extend: 'collection',
          text: '<i class="fa fa-download"></i> Export',
          className: 'btn buttons-collection btn-label-primary dropdown-toggle me-4 waves-effect border-none',
          buttons: [
            {
              extend: 'csvHtml5',
              text: '<i class="icon-base ri ri-file-text-line me-1"></i> CSV',
              className: 'dropdown-item'
            },
            {
              extend: 'excelHtml5',
              text: '<i class="icon-base ri-file-excel-2-line me-1"></i> Excel',
              className: 'dropdown-item'
            },
            {
              extend: 'pdfHtml5',
              text: '<i class="icon-base ri-file-pdf-2-line me-1"></i> PDF',
              className: 'dropdown-item'
            },
            {
              extend: 'print',
              text: '<i class="icon-base ri-printer-line me-1"></i> Print',
              className: 'dropdown-item'
            },
            {
              extend: 'copy',
              text: '<i class="icon-base ri ri-file-copy-line me-1"></i> Copy',
              className: 'dropdown-item'
            }
          ]
        }
      ],
      initComplete: function() {
        $('.dt-buttons .dropdown-item').each(function() {
            $('#customExportDropdown').append(
                $('<li>').append($(this))
            );
        });
        //$('.dt-buttons').hide();
      }

    });

      table.buttons().container().appendTo("#dataTable-button");
      var info = table.page.info();
      console.log(info);
      $('#filter_status').change(function(){
          table.draw();
      });
      $("#searchbox").keyup(function(){
          table.draw();
      });

      document.getElementById("searchbox").addEventListener("search", function(event) {
          table.draw();
      });
  });
</script>