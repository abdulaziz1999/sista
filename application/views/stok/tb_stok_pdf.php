<!doctype html>
<html>
    <head>
        <title>Stok</title>
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
        <h2>Tb_stok List</h2>
        <table class="word-table" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
                <th>Nama Barang</th>
                <th>Stok</th>
		
            </tr><?php
            foreach ($tb_stok_data as $tb_stok)
            {
                ?>
                <tr>
                <td><?php echo ++$start ?></td>
                <td><?= $this->db->get_where('tb_barang',['id_barang' => $tb_stok->id_barang])->row()->nama_barang ?></td>	
                <td><?php echo $tb_stok->stok ?></td>	
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>