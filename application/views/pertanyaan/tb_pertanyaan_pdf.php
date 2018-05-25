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
        <h2>Tb_pertanyaan List</h2>
        <table class="word-table" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Id Jpertanyaan</th>
		<th>Id Kuisioner</th>
		<th>Pertanyaan</th>
		<th>Pilihan</th>
		
            </tr><?php
            foreach ($tb_pertanyaan_data as $tb_pertanyaan)
            {
                ?>
                <tr>
		      <td><?php echo ++$start ?></td>
		      <td><?php echo $tb_pertanyaan->id_jpertanyaan ?></td>
		      <td><?php echo $tb_pertanyaan->id_kuisioner ?></td>
		      <td><?php echo $tb_pertanyaan->pertanyaan ?></td>
		      <td><?php echo $tb_pertanyaan->pilihan ?></td>	
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>