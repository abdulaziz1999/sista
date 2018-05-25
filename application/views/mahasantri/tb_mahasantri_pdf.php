<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            .word-table {
                border:1px solid black !important; 
                border-collapse: collapse !important;
                width: 100%;
            }
            .word-table tr th, .word-table tr td{
                border:1px solid black !important; 
                padding: 5px 10px;
            }
        </style>
    </head>
    <body>
        <h2>Tb_mahasantri List</h2>
        <table class="word-table" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Nama</th>
		<th>Nim</th>
		<th>Kelas</th>
		<th>Agama</th>
		<th>Tmp Lahir</th>
		<th>Tgl Lahir</th>
		<th>Alamat</th>
		<th>Email</th>
		<th>Nohp</th>
		
            </tr><?php
            foreach ($tb_mahasantri_data as $tb_mahasantri)
            {
                ?>
                <tr>
		      <td><?php echo ++$start ?></td>
		      <td><?php echo $tb_mahasantri->nama ?></td>
		      <td><?php echo $tb_mahasantri->nim ?></td>
		      <td><?php echo $tb_mahasantri->kelas ?></td>
		      <td><?php echo $tb_mahasantri->agama ?></td>
		      <td><?php echo $tb_mahasantri->tmp_lahir ?></td>
		      <td><?php echo $tb_mahasantri->tgl_lahir ?></td>
		      <td><?php echo $tb_mahasantri->alamat ?></td>
		      <td><?php echo $tb_mahasantri->email ?></td>
		      <td><?php echo $tb_mahasantri->nohp ?></td>	
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>