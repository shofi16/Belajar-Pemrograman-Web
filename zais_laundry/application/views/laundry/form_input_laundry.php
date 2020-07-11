<div class="col-md-6 col-md-offset-3">
	<div class="page-header">
		<h3>Tambah Pesanan Baru</h3>
		<br>
		<a href="<?php echo base_url().'admin_dashboard/laundry'?>" class="btn btn-primary btn-sm">Kembali</a>
		<br>
	</div>
	
<br><br>
	<form action="<?php echo base_url().'laundry/aksi_tambah_laundry' ?>" method="post" >
		<div class="form-group">
		<label for="id_laundry">ID Laundry</label>
		<input type="text" name="id_laundry" class="form-control">
		</div>
		<div class="form-group">
		<label for="nama_pelanggan">Nama Pelanggan</label>
		<input type="text" name="nama_pelanggan" class="form-control">
		</div>
		<div class="form-group">
		<label for="berat">Berat</label>
		<input type="text" name="berat" class="form-control">
		</div>
		<div class="form-group">
		<label for="status">Status</label>
		<select name="status" class="form-control">
		<option value="proses">Proses</option>
		<option value="ready">Ready</option>
		</select>
		</div>
		<div class="form-group">
		<label for="bayar">Bayar</label>
		<input type="text" name="bayar" class="form-control">
		</div>
		<label for="tanggal_masuk">Tanggal Masuk</label>
		<input type="date" name="tanggal_masuk" class="form-control">
		</div>
		<div class="form-group">
		<label for="tanggal_selesai">Tanggal Selesai</label>
		<input type="date" name="tanggal_selesai" class="form-control">
		</div>
		<div class="form-group">
		<label for="id_paket">ID Paket</label>
		<input type="text" name="id_paket" class="form-control">
		</div>
		
		<div class="form-group">
		<input type="submit" value="Simpan" class="btn btn-success btn-block">
		</div>
	</form>
</div>