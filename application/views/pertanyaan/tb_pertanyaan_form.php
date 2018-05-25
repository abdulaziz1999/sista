
        <section class='content'>
          <div class='row'>
            <div class='col-xs-12'>
              <div class='box'>
                <div class='box-header'>
                
                  <h3 class='box-title'>TB_PERTANYAAN</h3>
                      <div class='box box-primary'>
        <form action="<?php echo $action; ?>" method="post"><table class='table table-bordered'>
	    <tr><td>Id Jpertanyaan <?php echo form_error('id_jpertanyaan') ?></td>
            <td><?php echo cmb_dinamis('id_jpertanyaan', 'tb_jpertanyaan', 'jenis_pertanyaan', 'id_jpertanyaan', $id_jpertanyaan) ?>
        </td>
	    <tr><td>Id Kuisioner <?php echo form_error('id_kuisioner') ?></td>
            <td><?php echo cmb_dinamis('id_kuisioner', 'tb_kuisioner', 'kuisioner', 'id_kuisioner', $id_kuisioner) ?>
        </td>
	    <tr><td>Pertanyaan <?php echo form_error('pertanyaan') ?></td>
            <td><input type="text" class="form-control" name="pertanyaan" id="pertanyaan" placeholder="Pertanyaan" value="<?php echo $pertanyaan; ?>" />
        </td>
	    <tr><td>Pilihan <?php echo form_error('pilihan') ?></td>
            <td><input type="text" class="form-control" name="pilihan" id="pilihan" placeholder="Pilihan" value="<?php echo $pilihan; ?>" />
        </td>
	    <input type="hidden" name="id_pertanyaan" value="<?php echo $id_pertanyaan; ?>" /> 
	    <tr><td colspan='2'><button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('tb_pertanyaan') ?>" class="btn btn-default">Cancel</a></td></tr>
	
    </table></form>
    </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
        <!-- <input type="text" class="form-control" name="id_kuisioner" id="id_kuisioner" placeholder="Id Kuisioner" value="<?php echo $id_kuisioner; ?>" /> -->