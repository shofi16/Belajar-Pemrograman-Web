<div class="container">
	<div class="page-header">
		<h3>Data Paket</h3>
	</div>
	<a href="<?php echo base_url() . 'paket/input_paket/' ?>" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-plus"></span>Tambah Data Paket</a>
	<br><br>
	<table class="table table-dark table-striped table-hover" id="table-datatable">
		<tr>
			<th>ID Paket</th>
			<th>Nama paket</th>
			<th>Harga</th>
			<th>Aksi</th>
			
		</tr>
		<?php foreach($paket as $p) : ?>
		<tr>
		
			<td><?php echo $p -> id_paket; ?></td>
			<td><?php echo $p -> nama_paket; ?></td>
			<td><?php echo $p -> harga; ?></td>
			
			<td>
				<a href="<?php echo base_url().'paket/edit_paket/'.$p -> id_paket; ?>" class="btn btn-sm btn-primary"><span class="glyphicon glyphicon-edit"></span> Edit</a>
				<a href="<?php echo base_url().'paket/hapus_paket/'.$p -> id_paket; ?>" class="btn btn-sm btn-danger"><span class="glyphicon glyphicon-trash"></span> Hapus</a>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>

	<div>
	<a href="<?php echo base_url() . 'admin_dashboard/index/'; ?>" class="btn btn-primary btn-sm">Kembali</a>
	</div>
</div>