<div class="container">
	<div class="row mt-3">
		<div class="col-md-6">
			
			<div class="card">
				<div class="card-header">
					Detail Data Arsip Surat Masuk
				</div>

			<div class="card-body">
			<h5 class="card-title"><?php echo $surat_masuk['asal_surat']; ?></h5>
			<h6 class="card-subtitle mb-2 text-muted"><?php echo $surat_masuk['nomor_surat']; ?></h6>
				<p class="card-text"><?php echo $surat_masuk['perihal']; ?></p>
				<p class="card-text"><?php echo $surat_masuk['ringkasan']; ?></p>
				<p class="card-text"><?php echo $surat_masuk['tanggal']; ?></p><?php echo $surat_masuk['upload_file']; ?></p>


				<!--<p class="card-text"><embed src="assets/upload/<?php //echo $surat_masuk['upload_file']; ?>.pdf" type="application/pdf" width="100%" height="700"/></p>-->
				<a href="<?php echo base_url(); ?>arsip" class="badge badge-primary float-right">Kembali</a>
			</div>
		</div>
	</div>
</div>