	<div class="container">
	<?php if ($this->session->flashdata('flash')): ?>
	<div class="row mt-3">
		<div class="col-md-6">
			<div class="alert alert-warning alert-dismissible fade show" role="alert">
				Data Arsip Surat<strong> berhasil </strong> <?php echo $this->session->flashdata('flash'); ?>.
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times</span>
				</button>
			</div>
		</div>
	</div>
<?php endif; ?>


	<div class="row mt-3">
		<div class="col-md-6">
			<a href="<?php echo base_url(); ?>arsip_keluar/tambah" class="btn btn-primary">Tambah Arsip Surat</a>
		</div>
	</div>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Tables</li>
        </ol>

        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Data Surat</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr> 
                  	<th>No</th>
                    <th>Asal Surat</th>
                    <th>Nomor Surat</th>
                    <th>Perihal</th>
                    <th>Ringkasan</th>
                    <th>Tanggal</th>
                    <th>File</th>
                    <th>Aksi</th>
                  </tr>
                </thead>

			<?php foreach($surat_keluar as $arsp) { ?>
				<tbody>
				<tr>
				<td><?php echo $arsp['id_surat']; ?> </td>
				<td><?php echo $arsp['asal_surat']; ?> </td>
                <td><?php echo $arsp['nomor_surat']; ?> </td>
				<td><?php echo $arsp['perihal']; ?> </td>
				<td><?php echo $arsp['ringkasan']; ?> </td>
				<td><?php echo $arsp['tanggal']; ?>  </td>
				<td><?php echo $arsp['upload_file']; ?></td>
				<td>
				<a href="<?php echo base_url(); ?>arsip_keluar/hapus/<?php echo $arsp['id_surat'];?>" class="badge badge-danger float-right" onclick="return confirm('yakin?');">Hapus</a>

				<a href="<?php echo base_url(); ?>arsip_keluar/ubah/<?php echo $arsp['id_surat'];?>" class="badge badge-success float-right">Ubah</a>

				<a href="<?php echo base_url(); ?>arsip_keluar/detail/<?php echo $arsp['id_surat'];?>" class="badge badge-primary float-right">Detail</a>
				</td>
				</tr>
		<?php } ?>
				</tbody>
		</table>
		</div>
	</div>
</div>
<!--
1. penambahan pencarian lebih di persempit
2. penambahan hasil notulen
3. penambahan kategori surat keluar
-->
