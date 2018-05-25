
        <!-- Main content -->
        <section class='content'>
          <div class='row'>
            <div class='col-xs-12'>
              <div class='box'>
                <div class='box-header'>
                  <h3 class='box-title'>TB_JPERTANYAAN LIST 
                    <br><br>
        <?php echo anchor('tb_jpertanyaan/create/','Create',array('class'=>'btn btn-success btn-sm'));?>
		<?php echo anchor(site_url('tb_jpertanyaan/word'), '<i class="fa fa-file-word-o"></i> Word', 'class="btn btn-info btn-sm"'); ?>
		<?php echo anchor(site_url('tb_jpertanyaan/pdf'), '<i class="fa fa-file-pdf-o"></i> PDF', 'class="btn btn-warning btn-sm"'); ?></h3>
                </div><!-- /.box-header -->
                <div class='box-body'>
        <table class="table table-bordered table-striped" id="mytable">
            <thead>
                <tr>
                    <th width="80px">No</th>
		    <th>Jenis Pertanyaan</th>
		    <th>Action</th>
                </tr>
            </thead>
	    <tbody>
            <?php
            $start = 0;
            foreach ($tb_jpertanyaan_data as $tb_jpertanyaan)
            {
                ?>
                <tr>
		    <td><?php echo ++$start ?></td>
		    <td><?php echo $tb_jpertanyaan->jenis_pertanyaan ?></td>
		    <td style="text-align:center" width="140px">
			<?php 
			echo anchor(site_url('tb_jpertanyaan/read/'.$tb_jpertanyaan->id_jpertanyaan),'<i class="fa fa-eye"></i>',array('title'=>'detail','class'=>'btn btn-info btn-sm')); 
			echo '  '; 
			echo anchor(site_url('tb_jpertanyaan/update/'.$tb_jpertanyaan->id_jpertanyaan),'<i class="fa fa-pencil-square-o"></i>',array('title'=>'edit','class'=>'btn btn-success btn-sm')); 
			echo '  '; 
			echo anchor(site_url('tb_jpertanyaan/delete/'.$tb_jpertanyaan->id_jpertanyaan),'<i class="fa fa-trash-o"></i>','title="delete" class="btn btn-danger btn-sm" onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
			?>
		    </td>
	        </tr>
                <?php
            }
            ?>
            </tbody>
        </table>
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