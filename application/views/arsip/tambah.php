<div class="container">

	<div class="row mt-3">
		
		<div class="col-md-6">
			<div class="card">
				<div class="card-header">
					Form Tambah data surat
				</div>
				<div class="card-body">

					<form action="<?php base_url('arsip/tambah') ?>" method="post">
						<div class="form-group">
							<label for="nomor_surat">Nomor Surat</label>
							<input type="text" name="nomor_surat" class="form-control" id="nomor_surat" required="">
							<small class="form-text text-danger"><?php echo form_error('nomor_surat') ?></small>
						</div>
						<div class="form-group">
							<label for="asal_surat">Asal Surat</label>
							<input type="text" name="asal_surat" class="form-control" id="asal_surat" required="">
							<small class="form-text text-danger"><?php echo form_error('asal_surat') ?></small>
						</div>
						<div class="form-group">
							<label for="perihal">Perihal</label>
							<input type="text" name="perihal" class="form-control" id="perihal" required="">
							<small class="form-text text-danger"><?php echo form_error('perihal') ?></small>
						</div>
						<div class="form-group">
							<label for="ringkasan">Ringkasan</label>
							<input type="text" name="ringkasan" class="form-control" id="ringkasan" required="">
							<small class="form-text text-danger"><?php echo form_error('ringkasan') ?></small>
						</div>
						<div class="form-group">
							<label for="tanggal">Tanggal</label>
							<input type="date" name="tanggal" class="form-control" id="tanggal" required="">
							<small class="form-text text-danger"><?php echo form_error('tanggal') ?></small>
						</div>
						<div class="form-group">
							<label for="upload_file">Upload file</label>
							<input type="file" name="upload_file" class="form-control" id="upload_file" required="">
							<small class="form-text text-danger"><?php echo form_error('upload_file') ?></small>
						</div>

							<input class="btn btn-success" type="submit" name="btn" value="Save" />
							
					</form>
	</div>
</div>
</div>
</div>
</div>