 <html>
<head>
 <title>Dashboard</title>
</head>
<body>

 			
                  
<div class="page-header">
	<h1>Dashboard<small> <i class="ace-icon fa fa-angle-double-right"></i> Overview &amp; statistic &nbsp;
		<?php
				
		?></small>
	</h1>
</div>
<div class="row">
	<div class="col-xs-12">
		<div class="alert alert-block alert-success">
			<button type="button" class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button>
			<i class="ace-icon fa fa-check green"></i><strong class="green"> SELAMAT DATANG DI BERKAH INVENTORY SYSTEM<small> (Ver 1.0)</small></strong>. Aplikasi Sistem Informasi Stok Barang Gudang Jangan Lupa Ucapkan Basmalah Sebelum Memulai Aktivitas
		</div>
		
		<div class="space-6"></div>
		<div class="row">
			<div class="col-sm-12 infobox-container">
				<div class="infobox infobox-green infobox-small infobox-dark">
					<div class="infobox-icon"><i class="ace-icon fa fa-shopping-cart"></i></div>
					<div class="infobox-data">
						<div class="infobox-content">Receiving</div>
						<div class="infobox-content"></div>
					</div>
				</div>
				<div class="infobox infobox-purple infobox-small infobox-dark">
					<div class="infobox-icon"><i class="ace-icon fa fa-tasks"></i></div>
					<div class="infobox-data">
						<div class="infobox-content">Stock</div>
						<div class="infobox-content"></div>
					</div>
				</div>
				<div class="infobox infobox-grey infobox-small infobox-dark">
					<div class="infobox-icon"><i class="ace-icon fa fa-truck"></i></div>
					<div class="infobox-data">
						<div class="infobox-content">Issuing</div>
						<div class="infobox-content"></div>
					</div>
				</div>
			</div>
		</div>
		<div class="hr hr32 hr-dotted"></div>
		<div class="row">
			<div class="col-sm-12">
				<div class="widget-box transparent">
					<div class="widget-header widget-header-flat">
						<h4 class="widget-title lighter"><i class="ace-icon fa fa-bar-chart-o"></i>Brand</h4>
						<div class="widget-toolbar">
							<a href="#" data-action="collapse"><i class="ace-icon fa fa-chevron-up"></i></a>
						</div>
					</div>
					<div class="widget-body">
						<div class="widget-main padding-4">
							<div id="container1" class="col-sm-12" style="height:380px;"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="hr hr32 hr-dotted"></div>
		<div class="row">
			<div class="col-sm-5">
				<div class="widget-box transparent">
					<div class="widget-header widget-header-flat">
						<h4 class="widget-title lighter"><i class="ace-icon fa fa-star blue"></i>Top 5 Max Stock</h4>
						<div class="widget-toolbar">
							<a href="#" data-action="collapse"><i class="ace-icon fa fa-chevron-up"></i></a>
						</div>
					</div>
					<div class="widget-body">
						<div class="widget-main no-padding">
							<table class="table table-bordered table-striped">
								<thead class="thin-border-bottom">
									<tr>
										<th width="25%"><i class="ace-icon fa fa-lock blue"></i> Part Number</th>
										<th width="45%"><i class="ace-icon fa fa-caret-right blue"></i> Deskripsi</th>
										<th width="15%"><i class="ace-icon fa fa-caret-right blue"></i> Stock</th>
										<th width="15%" class="hidden-480"><i class="ace-icon fa fa-caret-right blue"></i> Rank</th>
									</tr>
								</thead>
								<tbody>
								
									<tr>
										<td>
											
										</td>
										<td></td>
										<td></td>
										<td class="hidden-480 center"><i class="ace-icon fa fa-star-o green"> </i></td>
									</tr>
									
								</tbody>
							</table>
						</div>
					</div>
				</div>
				<div class="hr hr32 hr-dotted"></div>
				<div class="widget-box transparent">
					<div class="widget-header widget-header-flat">
						<h4 class="widget-title lighter"><i class="ace-icon fa fa-star orange"></i>Top 5 Min Stock</h4>
						<div class="widget-toolbar">
							<a href="#" data-action="collapse"><i class="ace-icon fa fa-chevron-up"></i></a>
						</div>
					</div>
					<div class="widget-body">
						<div class="widget-main no-padding">
							<table class="table table-bordered table-striped">
								<thead class="thin-border-bottom">
									<tr>
										<th width="25%"><i class="ace-icon fa fa-lock blue"></i> Part Number</th>
										<th width="45%"><i class="ace-icon fa fa-caret-right blue"></i> Deskripsi</th>
										<th width="15%"><i class="ace-icon fa fa-caret-right blue"></i> Stock</th>
										<th width="15%" class="hidden-480"><i class="ace-icon fa fa-caret-right blue"></i> Rank</th>
									</tr>
								</thead>
								<tbody>
									
									<tr>
										<td>
										</td>
										<td></td>
										<td></td>
										<td class="hidden-480 center"><i class="ace-icon fa fa-star-o green"> </i></td>
									</tr>
								
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-7">
				<div class="widget-box transparent">
					<div class="widget-header widget-header-flat">
						<h4 class="widget-title lighter"><i class="ace-icon fa fa-bar-chart-o"></i>Kategori</h4>
						<div class="widget-toolbar">
							<a href="#" data-action="collapse"><i class="ace-icon fa fa-chevron-up"></i></a>
						</div>
					</div>
					<div class="widget-body">
						<div class="widget-main padding-4">
							<div id="container" class="col-sm-12" style="height:380px;"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

			 
		<script src="<?= base_url()?>assets/js/highcharts.js" type="text/javascript"></script>
		


 
</body>
</html>