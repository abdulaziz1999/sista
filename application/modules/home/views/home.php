<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="<?= base_url('admin'); ?>">Dashboard</a>
							</li>
							<li class="active">Log Whatsapp</li>
						</ul>
	</div>
        <!-- Main content -->
        <section class='content'>
          <div class='row'>
            <div class='col-xs-12'>
              <div class='box'>
                <div class='box-header'>
                  
				<h3 class='box-title'>Log Whatsapp<br><br>
				</h3>
                </div><!-- /.box-header -->
        
        <div class='box-body'>
        <div class="table-header">
							Log
						</div>
        <div class="table-responsive">
          <table class="table table-bordered table-striped table-sm" id="table">
              <thead>
              <tr> 
                  <th>No</th>
                  <th>Pesan</th>
                  <th>Nomor Handphone</th>
                  <th>Status</th>
                  <th>Time</th>
              </tr>
              </thead>
          </table>
        </div>
        <script src="<?php echo base_url('assets/js/jquery-1.11.2.min.js') ?>"></script>
        <script src="<?php echo base_url('assets/datatables/jquery.dataTables.js') ?>"></script>
        <script src="<?php echo base_url('assets/datatables/dataTables.bootstrap.js') ?>"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                $("#mytable").dataTable();
            });
        </script>
                    </div><!-- /.box-body -->
                    
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->