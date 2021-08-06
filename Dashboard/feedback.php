<?php
 include './partials/dash-header.php';
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">FAQs</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">FAQs</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content --->
    <!-- /.content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-12 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card col-md-12">
              <div class="card-header my-2" style="border-bottom: none;">
                <h3 class="card-title">
                  <i class="fas fa-comments "></i>
                  FAQs
                </h3>
              </div> <!-- /.card-header
              <div class="card-body">
                <div class="tab-content p-0">
                 Morris chart - Sales -->
                 <div class="table-responsive">
                    <table class="table display table-striped table-bordered nowrap text-center col-md-12" id="ft_table" style="width: 100%; ">
                      <thead>
                        <th>Sr.No</th>
                        <th>Questions</th>
                        <th>Answers</th>
                        <th>Status</th>
                        <th>Action</th>
                      </thead>
                      <tbody>
                      </tbody>
                      <tfoot>
                        <th>Sr.No</th>
                        <th>Questions</th>
                        <th>Answers</th>
                        <th>Status</th>
                        <th>Action</th>
                      </tfoot>
                    </table>
                  </div>
                  </div>
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
  </div>
  <!-- /.content-wrapper -->
<?php
 include './partials/dash-footer.php';
?>
<script type="text/javascript">
  function loader(){
        
        $.blockUI({
            message: '<div class="loader"><svg class="circular" viewBox="25 25 50 50"> <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"/></svg></div>',
            overlayCSS: {
                backgroundColor: '#000',
                opacity: 0.7,
                cursor: 'wait'
            },
            css: {
                color: '#333',
                border: 0,
                padding: 0,
                backgroundColor: 'transparent'
            },
        });
    
    }
$(document).ready(function() {
    // $.fn.dataTable.moment( 'YYYY-MM-DD HH:mm:ss' );
    
    table = $('#ft_table').DataTable({
            "destroy": true,
            "order": [
                [1, "asc"]
            ],
            "language": {
                "thousands": "'",
            },
            "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
            "ajax": {
                "url": "./backend/data.php",
                "type": "POST",
                "data": {
                    "type": "fetch_faqs",
            }
        },
        rowCallback: function (row,data) {
          console.log(data);
                      // if(admin == 1) {
            //     $('td:eq(5)',row).html('<a href="'+data[5]+'" target="_blank">'+data[5]+'</a>');
                // $('td:eq(3)',row).html(`<button class="btn btn-danger btn-sm" onClick=deleteNotification('${data[3]}')>Delete</button>`);
            // }
            // else {
            //     $('td:eq(4)',row).html('<a href="'+data[4]+'" target="_blank">'+data[4]+'</a>');
                // $('td:eq(6)',row).html(`<button class="btn btn-primary btn-sm resend" onClick=resendNotification('${data[1]}') ${data[6]=='paid'? 'disabled' : ''}>Resend</button>`);
            }
        // }
        
    });
  });
</script>
</body>
</html>
