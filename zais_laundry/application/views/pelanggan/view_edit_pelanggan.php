<div class="container">
	<div class="page-header">
		<h3>Edit Data Pelanggan</h3>
	</div>
	<div class="col-md-6 col-md-offset-3">
	<?php foreach($pelanggan as $p) : ?>
		<form action="<?php echo base_url().'pelanggan/update_pelanggan/'; ?>" method="post">
			<div class="form-group">
				<label for="nama_pelanggan">Nama Pelanggan</label>
				<input type="hidden" name="id_pelanggan" value="<?php echo $p -> id_pelanggan; ?>">
				<input type="text" name="nama_pelanggan" value="<?php echo $p -> nama_pelanggan; ?>" class="form-control">
			</div>
			<div class="form-group">
				<label for="no_telepon">Nomor Telepon</label>
				<input type="text" name="no_telepon" value="<?php echo $p -> no_telepon; ?>" class="form-control">
			</div>
			<div class="form-group">
				<label for="alamat">Alamat</label>
				<input type="text" name="alamat" value="<?php echo $p -> alamat; ?>" class="form-control">
			</div>
			<div class="form-group">
				<input type="submit" value="Update Data Pelanggan" class="btn btn-success btn-block">
			</div>
		</form>
	<?php endforeach; ?>
</div>
</div>