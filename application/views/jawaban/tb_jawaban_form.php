<!-- Main content -->
        <section class='content'>
          <div class='row'>
            <div class='col-xs-12'>
              <div class='box'>
                <div class='box-header'>
                
                  <h3 class='box-title'>TB_JAWABAN</h3>
                      <div class='box box-primary'>
        <form action="<?php echo $action; ?>" method="post"><table class='table table-bordered'>
	    <tr><td>Id Mahasantri <?php echo form_error('id_mahasantri') ?></td>
            <td><?php echo cmb_dinamis('id_mahasantri', 'tb_mahasantri', 'nama', 'id_mahasantri', $id_mahasantri) ?>
        </td>
	    <tr><td>Id Pertanyaan <?php echo form_error('id_pertanyaan') ?></td>
            <td><?php echo cmb_dinamis('id_pertanyaan', 'tb_pertanyaan', 'pertanyaan', 'id_pertanyaan', $id_pertanyaan) ?>
        </td>
	    <tr><td>Jawaban <?php echo form_error('jawaban') ?></td>
            <td><input type="text" class="form-control" name="jawaban" id="jawaban" placeholder="Jawaban" value="<?php echo $jawaban; ?>" />
        </td>
	    <input type="hidden" name="id_jawaban" value="<?php echo $id_jawaban; ?>" /> 
	    <tr><td colspan='2'><button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('tb_jawaban') ?>" class="btn btn-default">Cancel</a></td></tr>
	
    </table></form>
    </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->