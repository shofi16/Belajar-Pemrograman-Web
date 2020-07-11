<div class="col-md-6 col-md-offset-3">
	<div class="page-header">
		<h3>Tambah Data Pelanggan</h3>
			<div>
			<a href="<?php echo base_url().'admin_dashboard/pelanggan/'; ?>" class="btn btn-primary btn-sm">Batal</a>
			</div>
	</div>

	<form action="<?php echo base_url().'pelanggan/aksi_tambah_pelanggan/' ?>" method="post">
		<div class="form-group">
		<label for="id_pelanggan">ID Pelanggan</label>
		<input type="text" name="id_pelanggan" class="form-control">
		</div>	
		<div class="form-group">
			<label>Nama Pelanggan</label>
			<input type="text" name="nama_pelanggan" class="form-control">
		</div>

		<div class="form-group">
			<label for="no_telepon">No telepon</label>
			<input type="text" name="no_telepon" class="form-control">
		</div>

		<div class="form-group">
			<label for="alamat">Alamat</label>
			<input type="text" name="alamat" class="form-control">
		</div>

		<div class="form-group">
			<input type="submit" value="Simpan" class="btn btn-success btn-block">
		</div>

	</form>
</div>