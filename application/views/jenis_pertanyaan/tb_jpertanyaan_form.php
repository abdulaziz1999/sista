<!-- Main content -->
        <section class='content'>
          <div class='row'>
            <div class='col-xs-12'>
              <div class='box'>
                <div class='box-header'>
                
                  <h3 class='box-title'>TB_JPERTANYAAN</h3>
                      <div class='box box-primary'>
        <form action="<?php echo $action; ?>" method="post"><table class='table table-bordered'>
	    <tr><td>Jenis Pertanyaan <?php echo form_error('jenis_pertanyaan') ?></td>
            <td><input type="text" class="form-control" name="jenis_pertanyaan" id="jenis_pertanyaan" placeholder="Jenis Pertanyaan" value="<?php echo $jenis_pertanyaan; ?>" />
        </td>
	    <input type="hidden" name="id_jpertanyaan" value="<?php echo $id_jpertanyaan; ?>" /> 
	    <tr><td colspan='2'><button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('tb_jpertanyaan') ?>" class="btn btn-default">Cancel</a></td></tr>
	
    </table></form>
    </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->