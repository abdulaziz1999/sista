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
        <h2>Tb_receiving List</h2>
        <table class="word-table" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Tgl</th>
		<th>No Ref</th>
		<th>Supplier</th>
		<th>Remarks</th>
		
            </tr><?php
            foreach ($tb_receiving_data as $tb_receiving)
            {
                ?>
                <tr>
		      <td><?php echo ++$start ?></td>
		      <td><?php echo $tb_receiving->tgl ?></td>
		      <td><?php echo $tb_receiving->no_ref ?></td>
		      <td><?php echo $tb_receiving->supplier ?></td>
		      <td><?php echo $tb_receiving->remarks ?></td>	
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>