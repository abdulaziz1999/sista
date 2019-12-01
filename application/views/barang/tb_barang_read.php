
        <!-- Main content -->
        <section class='content'>
          <div class='row'>
            <div class='col-xs-12'>
              <div class='box'>
                <div class='box-header'>
                <h3 class='box-title'>Tb_barang Read</h3>
        <table class="table table-bordered">
	    <tr><td>Part Number</td><td><?php echo $part_number; ?></td></tr>
	    <tr><td>Nama Barang</td><td><?php echo $nama_barang; ?></td></tr>
	    <tr><td>Kategori</td><td><?php echo $kategori; ?></td></tr>
	    <tr><td>Brand</td><td><?php echo $brand; ?></td></tr>
	    <tr><td>Satuan</td><td><?php echo $satuan; ?></td></tr>
	    <tr><td>Ket</td><td><?php echo $ket; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('tb_barang') ?>" class="btn btn-sm btn-round btn-default">Cancel</a></td></tr>
	</table>
        </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->