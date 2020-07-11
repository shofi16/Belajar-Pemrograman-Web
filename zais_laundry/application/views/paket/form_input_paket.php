<div class="col-md-6 col-md-offset-3">
	<div class="page-header">
		<h3>Tambah Data Paket</h3>
		<div class="right">
			<a href="<?php echo base_url().'admin_dashboard/paket/'; ?>" class="btn btn-primary btn-sm">Batal</a>
			</div>
	</div>
	<form action="<?php echo base_url().'paket/aksi_tambah_paket/' ?>" method="post">
	<div class="form-group">
	<label for="id_paket">ID Paket</label>
	<input type="text" name="id_paket" class="form-control">
	</div>
		<div class="form-group">
			<label for="nama_paket">Nama Paket</label>
				<input type="text" name="nama_paket" class="form-control" placeholder="Isi nama paket">
		</div>
		
		<div class="form-group">
			<label for="harga">Harga</label>
				<input type="text" name="harga" class="form-control" placeholder="Isi Harga">
		</div>
		
		<div class="form-group">
			<input type="submit" value="Simpan" class="btn btn-success btn-block">
		</div>
	</form>

			
</div>