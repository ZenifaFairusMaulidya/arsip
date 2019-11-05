<div class="container">

	<div class="row mt-3">
		
		<div class="col-md-6">
			<div class="card">
				<div class="card-header">
					Form Ubah Data Surat
				</div>
				<div class="card-body">

					<form action="<?php base_url('arsip_keluar/ubah') ?>" method="post">

						<div class="form-group">
							<label for="nomor_surat">Nomor Surat</label>
							<input type="text" name="nomor_surat" class="form-control" id="nomor_surat" value="<?php echo $surat_keluar['nomor_surat']; ?>">
							<small class="form-text text-danger"><?php echo form_error('nomor_surat') ?></small>
						</div>
						<div class="form-group">
							<label for="asal_surat">Asal Surat</label>
							<input type="text" name="asal_surat" class="form-control" id="asal_surat" value="<?php echo $surat_keluar['asal_surat']; ?>">
							<small class="form-text text-danger"><?php echo form_error('asal_surat') ?></small>
						</div>
						<div class="form-group">
							<label for="perihal">Perihal</label>
							<input type="text" name="perihal" class="form-control" id="perihal" value="<?php echo $surat_keluar['perihal']; ?>">
							<small class="form-text text-danger"><?php echo form_error('perihal') ?></small>
						</div>
						<div class="form-group">
							<label for="ringkasan">Ringkasan</label>
							<input type="text" name="ringkasan" class="form-control" id="ringkasan" value="<?php echo $surat_keluar['ringkasan']; ?>">
							<small class="form-text text-danger"><?php echo form_error('ringkasan') ?></small>
						</div>
						<div class="form-group">
							<label for="tanggal">Tanggal</label>
							<input type="date" name="tanggal" class="form-control" id="tanggal" value="<?php echo $surat_keluar['tanggal']; ?>">
							<small class="form-text text-danger"><?php echo form_error('tanggal') ?></small>
						</div>
						<div class="form-group">
							<label for="upload_file">Upload file</label>
							<input type="file" name="upload_file" class="form-control" id="upload_file" value="<?php echo $surat_keluar['upload_file']; ?>">
							<small class="form-text text-danger"><?php echo form_error('upload_file') ?></small>
						</div>


					<button type="submit" name="ubah" class="btn btn-primary float-right">Ubah Data</button>

					</form>
<!--				<blockquote class="blockquote mb-0">
				<p>Lorem</p>
				<footer class="blockquote-footer">Someone <cite title="Source title">Source Title</cite></footer>
		</blockquote>-->
	</div>
</div>
</div>
</div>
</div>