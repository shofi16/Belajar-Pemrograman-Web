<div class="container">
	<div class="page-header">
		<h3>Edit Data Laundry</h3>
	</div>
	<div class="col-md-6 col-md-offset-3">
	<?php foreach($laundry as $p) : ?>
		<form action="<?php echo base_url().'laundry/update_laundry/'; ?>" method="post">
			<div class="form-group">
				<label for="berat">Nama Pelanggan</label>
				<input type="text" name="nama_pelanggan" value="<?php echo $p -> nama_pelanggan; ?>" class="form-control">
			</div>
			
			<div class="form-group">
				<label for="berat">Berat</label>
				<input type="text" name="berat" value="<?php echo $p -> berat; ?>" class="form-control">
			</div>
			
			<div class="form-group">
				<label for="status">Status</label>
				<input type="text" name="status" value="<?php echo $p -> status; ?>" class="form-control">
			</div>
			
			<div class="form-group">
				<label for="bayar">Bayar</label>
				<input type="text" name="bayar" value="<?php echo $p -> bayar; ?>" class="form-control">
			</div>
			
			<div class="form-group">
				<label for="tanggal_masuk">Tanggal Masuk</label>
				<input type="text" name="tanggal_masuk" value="<?php echo $p -> tanggal_masuk; ?>" class="form-control">
			</div>
			
			<div class="form-group">
		<label for="tanggal_selesai">Tanggal Selesai</label>
		<input type="date" name="tanggal_selesai" class="form-control">
		</div>
		<div class="form-group">
		<label for="id_paket">ID Paket</label>
		<input type="text" name="id_paket" class="form-control">
		</div>
		</form>
	<?php endforeach; ?>
</div>
</div>