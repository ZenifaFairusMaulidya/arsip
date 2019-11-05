<div class="container">
	<div class="row mt-3">
		<div class="col-md-6">
			
			<div class="card">
				<div class="card-header">
					Detail Data Arsip Surat Keluar
				</div>
			</div>
			<div class="card-body">
				<h5 class="card-title"><?php echo $surat_keluar['id_surat']; ?></h5>
				<h6 class="card-subtitle mb-2 text-muted"><?php echo $surat_keluar['asal_surat']; ?></h6>
				<p class="card-text"><?php echo $surat_keluar['nomor_surat']; ?></p>
				<p class="card-text"><?php echo $surat_keluar['perihal']; ?></p>
				<p class="card-text"><?php echo $surat_keluar['ringkasan']; ?></p>
				<p class="card-text"><?php echo $surat_keluar['tanggal']; ?></p>
				<p class="card-text"><?php echo $surat_keluar['upload_file']; ?></p>
				<a href="<?php echo base_url(); ?>arsip_keluar" class="badge badge-primary float-right">Back</a>
			</div>
		</div>
	</div>
</div>