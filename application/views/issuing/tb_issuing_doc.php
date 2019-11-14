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
        <h2>Tb_issuing List</h2>
        <table class="word-table" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Tgl</th>
		<th>No Ref</th>
		<th>Picker</th>
		<th>Remarks</th>
		
            </tr><?php
            foreach ($tb_issuing_data as $tb_issuing)
            {
                ?>
                <tr>
		      <td><?php echo ++$start ?></td>
		      <td><?php echo $tb_issuing->tgl ?></td>
		      <td><?php echo $tb_issuing->no_ref ?></td>
		      <td><?php echo $tb_issuing->picker ?></td>
		      <td><?php echo $tb_issuing->remarks ?></td>	
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>