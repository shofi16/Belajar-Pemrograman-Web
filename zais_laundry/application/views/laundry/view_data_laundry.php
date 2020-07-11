<div class="container">
			
				<div class="page-header">
					<h3><b>Data Laundry</b></h3>
				</div>
				<a href="<?php echo base_url().'laundry/input_laundry/' ?>" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-plus"></span>Input Pesanan Baru</a>
				<br><br>
				<div class="panel-body">
					<table class="table table-dark table-striped table-hover" id="table-datatable">
						<tr>
							<th>ID Laundry</th>
							<th>Nama Pelanggan</th>
							<th>Berat</th>
							<th>Status</th>
							<th>Bayar</th>
							<th>Tanggal Masuk</th>
							<th>Tanggal Selesai</th>
							
						</tr>
						<?php foreach($laundry as $t) : ?>
						<tr>
							
							<td><?php echo $t -> id_laundry; ?></td>
							<td><?php echo $t -> nama_pelanggan; ?></td>
							<td><?php echo $t -> berat; ?></td>
							<td><?php if($t -> status == "proses")
							{
								echo "Proses";
							} elseif($t -> status == "ready")
							{
								echo "Ready";
							} ?> </td>
							<td><?php echo $t -> bayar; ?></td>
							<td><?php echo $t -> tanggal_masuk; ?></td>
							<td><?php echo $t -> tanggal_selesai; ?></td>
							<td><?php echo $t -> id_paket; ?></td>
							
							
	
						</tr>

						<?php endforeach; ?>

					</table>

					<a href="<?php echo base_url().'admin_dashboard/index/'; ?>" class="btn btn-primary btn-sm">Kembali</a>
				</div>
			</div>
		</div>
