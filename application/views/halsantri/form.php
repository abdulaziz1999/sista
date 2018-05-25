						<div class="page-header">
							<h1>
								Tables
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									Static &amp; Dynamic Tables
								</small>
							</h1>
						</div><!-- /.page-header -->


  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="home"><div class="row">
    	<div class="col-xs-7"><h3>Dosen</h3>
    		<h4>Nama Dosen : <input type="text" name="dosen"></h4>
    		<h4>Mata Kuliah : <input type="text" name="matkul"></h4>
    	</div>

    	<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
										<div class="row">
									<div class="col-xs-12">
										<table id="simple-table" class="table  table-bordered table-hover" >
											<thead >
												<tr >
													<th class="detail-col" bgcolor="aqua">No</th>
													<th bgcolor="aqua">Pertanyaan</th>
													<th bgcolor="aqua" colspan="5" class="center">Pilihan</th>
													
												</tr>
											</thead>
											<tbody>
												<?php
									            $start = 0;
									            foreach ($tb_pertanyaan_data as $tb_pertanyaan)
									            {
									                ?>
									                <tr>											
													
													<td >
														<?php echo ++$start ?>
													</td>

													<td>
														<?php echo $tb_pertanyaan->pertanyaan ?>
													</td>
													<td>
														<input name="jwb<?= $tb_pertanyaan->id_pertanyaan ?>" type="radio" class="ace" />
														<span class="lbl"><?php echo form_error('pilihan' == '1') ?></span>
													</td>
													<td>
														<input  name="jwb<?= $tb_pertanyaan->id_pertanyaan ?>" type="radio" class="ace" />
														<span class="lbl"><?php echo form_error('pilihan' == '2') ?></span>
													</td>
													<td><input  name="jwb<?= $tb_pertanyaan->id_pertanyaan ?>" type="radio" class="ace" />
														<span class="lbl"><?php echo form_error('pilihan' == '3') ?></span>
													</td>
													<td>
														<input name="jwb<?= $tb_pertanyaan->id_pertanyaan ?>" type="radio" class="ace" />
														<span class="lbl"><?php echo form_error('pilihan' == '4') ?></span>
													</td>
													<td>
														<input  name="jwb<?= $tb_pertanyaan->id_pertanyaan ?>" type="radio" class="ace" />
														<span class="lbl"><?php echo form_error('pilihan' == '5') ?></span>
													</td>
												</tr>
    <?php
            }
            ?>
											</tbody>
										</table>

										<!-- manjemen -->
			<!-- <div class="col-xs-7"><h3>Manajeman</h3>
    		<h4>Nama Manajemen : <input type="text" name="manajemen"></h4>
    		<h4>Bagian : <input type="text" name="bagian"></h4>
    		</div>
							<div class="col-xs-12">
								
								<div class="row">
									<div class="col-xs-12">
										<table id="simple-table" class="table  table-bordered table-hover" >
											<thead>
												<tr>
													<th bgcolor="aqua" class="detail-col">No</th>
													<th bgcolor="aqua">Pertanyaan</th>
													<th bgcolor="aqua" colspan="5" class="center">Pilihan</th>
													
												</tr>
											</thead>

											<tbody>
												<?php
									            $start = 0;
									            foreach ($tb_pertanyaan_data as $tb_pertanyaan)
									            {
									                ?>
									                <tr>											
													
													<td >
														<?php echo ++$start ?>
													</td>

													<td>
														<?php echo $tb_pertanyaan->pertanyaan ?>
													</td>
													<td>
														<input name="jwb<?= $tb_pertanyaan->id_pertanyaan ?>" type="radio" class="ace" />
														<span class="lbl"><?php echo form_error('pilihan' == '1') ?></span>
													</td>
													<td>
														<input  name="jwb<?= $tb_pertanyaan->id_pertanyaan ?>" type="radio" class="ace" />
														<span class="lbl"><?php echo form_error('pilihan' == '2') ?></span>
													</td>
													<td><input  name="jwb<?= $tb_pertanyaan->id_pertanyaan ?>" type="radio" class="ace" />
														<span class="lbl"><?php echo form_error('pilihan' == '3') ?></span>
													</td>
													<td>
														<input name="jwb<?= $tb_pertanyaan->id_pertanyaan ?>" type="radio" class="ace" />
														<span class="lbl"><?php echo form_error('pilihan' == '4') ?></span>
													</td>
													<td>
														<input  name="jwb<?= $tb_pertanyaan->id_pertanyaan ?>" type="radio" class="ace" />
														<span class="lbl"><?php echo form_error('pilihan' == '5') ?></span>
													</td>
												</tr>
    <?php
            }
            ?>
											</tbody>
										</table>
 -->
										<!-- santri -->
			<!-- 							<div class="col-xs-7"><h3>Mahasantri</h3>
    		<h4>Nama Mahasantri : <input type="text" name="mahasantri"></h4>
    		<h4>Kelas : <input type="text" name="kelas"></h4>
    	</div>
							<div class="col-xs-12">
								
								<div class="row">
									<div class="col-xs-12">
										<table id="simple-table" class="table  table-bordered table-hover" >
											<thead>
												<tr>
													<th bgcolor="aqua" class="detail-col">No</th>
													<th bgcolor="aqua">Pertanyaan</th>
													<th bgcolor="aqua" colspan="5" class="center">Pilihan</th>
													
												</tr>
											</thead>
<tbody>
												<?php
									            $start = 0;
									            foreach ($tb_pertanyaan_data as $tb_pertanyaan)
									            {
									                ?>
									                <tr>											
													
													<td >
														<?php echo ++$start ?>
													</td>

													<td>
														<?php echo $tb_pertanyaan->pertanyaan ?>
													</td>
													<td>
														<input name="jwb<?= $tb_pertanyaan->id_pertanyaan ?>" type="radio" class="ace" />
														<span class="lbl"><?php echo form_error('pilihan' == '1') ?></span>
													</td>
													<td>
														<input  name="jwb<?= $tb_pertanyaan->id_pertanyaan ?>" type="radio" class="ace" />
														<span class="lbl"><?php echo form_error('pilihan' == '2') ?></span>
													</td>
													<td><input  name="jwb<?= $tb_pertanyaan->id_pertanyaan ?>" type="radio" class="ace" />
														<span class="lbl"><?php echo form_error('pilihan' == '3') ?></span>
													</td>
													<td>
														<input name="jwb<?= $tb_pertanyaan->id_pertanyaan ?>" type="radio" class="ace" />
														<span class="lbl"><?php echo form_error('pilihan' == '4') ?></span>
													</td>
													<td>
														<input  name="jwb<?= $tb_pertanyaan->id_pertanyaan ?>" type="radio" class="ace" />
														<span class="lbl"><?php echo form_error('pilihan' == '5') ?></span>
													</td>
												</tr>
    <?php
            }
            ?>
											</tbody>
										</table>
										<button class="btn btn-info">Save</button> -->
										
										
									</div><!-- /.span -->
								</div><!-- /.row -->
								
								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
    		</div>
    	</div>
   
    
								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row --></div>
   
  </div>




						