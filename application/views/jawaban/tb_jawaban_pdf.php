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
        <h2>Tb_jawaban List</h2>
        <table class="word-table" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Id Mahasantri</th>
		<th>Id Pertanyaan</th>
		<th>Jawaban</th>
		
            </tr><?php
            foreach ($tb_jawaban_data as $tb_jawaban)
            {
                ?>
                <tr>
		      <td><?php echo ++$start ?></td>
		      <td><?php echo $tb_jawaban->id_mahasantri ?></td>
		      <td><?php echo $tb_jawaban->id_pertanyaan ?></td>
		      <td><?php echo $tb_jawaban->jawaban ?></td>	
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>