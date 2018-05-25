<!-- Main content -->
        <section class='content'>
          <div class='row'>
            <div class='col-xs-12'>
              <div class='box'>
                <div class='box-header'>
                
                  <h3 class='box-title'>TB_MAHASANTRI</h3>
                      <div class='box box-primary'>
        <form action="<?php echo $action; ?>" method="post"><table class='table table-bordered'>
	    <tr><td>Nama <?php echo form_error('nama') ?></td>
            <td><input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Lengkap" value="<?php echo $nama; ?>" />
        </td>
	    <tr><td>Nim <?php echo form_error('nim') ?></td>
            <td><input type="text" class="form-control" name="nim" id="nim" placeholder="NIM" value="<?php echo $nim; ?>" />
        </td>
	    <tr><td>Kelas <?php echo form_error('kelas') ?></td>
            <td><input type="text" class="form-control" name="kelas" id="kelas" placeholder="Kelas" value="<?php echo $kelas; ?>" />
        </td>
	    <tr><td>Agama <?php echo form_error('agama') ?></td>
            <td><input type="text" class="form-control" name="agama" id="agama" placeholder="Agama" value="<?php echo $agama; ?>" />
        </td>
	    <tr><td>Tmp Lahir <?php echo form_error('tmp_lahir') ?></td>
            <td><input type="text" class="form-control" name="tmp_lahir" id="tmp_lahir" placeholder="Tempat Lahir" value="<?php echo $tmp_lahir; ?>" />
        </td>
	    <tr><td>Tgl Lahir <?php echo form_error('tgl_lahir') ?></td>
            <td><input type="text" class="form-control" name="tgl_lahir" id="tgl_lahir" placeholder="yyyy-mm-dd" value="<?php echo $tgl_lahir; ?>" />
        </td>
	    <tr><td>Alamat <?php echo form_error('alamat') ?></td>
            <td><input type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat" value="<?php echo $alamat; ?>" />
        </td>
	    <tr><td>Email <?php echo form_error('email') ?></td>
            <td><input type="text" class="form-control" name="email" id="email" placeholder="Email" value="<?php echo $email; ?>" />
        </td>
	    <tr><td>Nohp <?php echo form_error('nohp') ?></td>
            <td><input type="text" class="form-control" name="nohp" id="nohp" placeholder="Nohp" value="<?php echo $nohp; ?>" />
        </td>
	    <input type="hidden" name="id_mahasantri" value="<?php echo $id_mahasantri; ?>" /> 
	    <tr><td colspan='2'><button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('tb_mahasantri') ?>" class="btn btn-default">Cancel</a></td></tr>
	
    </table></form>
    </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->