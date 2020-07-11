<div class="container">
	<div class="page-header">
		<h3>Edit Data Paket</h3>
	</div>
	<div class="col-md-6 col-md-offset-3">
	<?php foreach($paket as $p) : ?>
		<form action="<?php echo base_url().'paket/update_paket/'; ?>" method="post">
			<div class="form-group">
				<label for="nama_paket">Nama Paket</label>
				<input type="hidden" name="id_paket" value="<?php echo $p -> id_paket; ?>">
				<input type="text" name="nama_paket" value="<?php echo $p -> nama_paket; ?>" class="form-control">
			</div>
			<div class="form-group">
				<label for="harga">Harga</label>
				<input type="text" name="harga" value="<?php echo $p -> harga; ?>" class="form-control">
			</div>
			
			<div class="form-group">
				<input type="submit" value="Update Data Paket" class="btn btn-success btn-block">
			</div>
		</form>
	<?php endforeach; ?>
</div>
</div>