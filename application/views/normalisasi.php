<nav aria-label="breadcrumb" style="background-color: #e9ecef;">
	<ol class="breadcrumb container font-kedua p-3" style="margin-bottom: auto;">
		<li class="breadcrumb-item"><a href="<?php echo base_url('home');?>">Home</a></li>
		<li class="breadcrumb-item active" aria-current="page">Hasil Normalisasi</li>
	</ol>
</nav>
<div class="body-utama pb-5">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-12">
				<div class="card font-kedua" style="margin-top: 50px">
					<div class="card-header">
						<h3 class="card-title text-center">Tabel Normalisasi</h3>
					</div>
					<div class="card-body">
						<div class="table-responsive" >
							<table class="table table-bordered table-striped table-hovered text-center" >
								<thead>
									<th>NAMA SUPPLIER</th>
									<th>DISKON</th>
									<th>PELAYANAN</th>
									<th>KUALITAS KAROSESI</th>
									<th>PROGRAM SERVIS BERKALA</th>
									<th>BONUS</th>
								</thead>
								<tbody>
									<?php 
										foreach ($main['konversi'] as $k) { ?>
											<tr>
												<td><?php echo $k->nama_supplier;?></td>
												<td><?php echo $k->konversi_1;?></td>
												<td><?php echo $k->konversi_2;?></td>
												<td><?php echo $k->konversi_3;?></td>
												<td><?php echo $k->konversi_4;?></td>
												<td><?php echo $k->konversi_5;?></td>
											</tr>
										<?php }
										?>
								</tbody>
							</table>
						</div>
					</div>
					<div class="card-footer">
						<a href="<?php echo base_url();?>supplier/hasil" class="btn btn-dark"><i class="fa fa-desktop"></i> Hitung Suppliers</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
