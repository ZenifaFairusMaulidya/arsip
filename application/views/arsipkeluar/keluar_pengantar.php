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
            <form action="<?php base_url('arsipkeluar/keluar_pengantar') ?>" method="post">

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

			<?php foreach($surat_keluar as $arsp) : ?>
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
				<a href="<?php echo base_url(); ?>arsip/hapus/<?php echo $arsp['id_surat'];?>" class="badge badge-danger float-right" onclick="return confirm('yakin?');">Hapus</a>

				<a href="<?php echo base_url(); ?>arsip/ubah/<?php echo $arsp['id_surat'];?>" class="badge badge-success float-right">Ubah</a>

				<a href="<?php echo base_url(); ?>arsip/detail/<?php echo $arsp['id_surat'];?>" class="badge badge-primary float-right">Detail</a>
				</td>
				</tr>
				</tbody>
		<?php endforeach; ?>
		</table>
		</div>
	</div>
</div>
</div>
</div>
</form>

<!--
1. penambahan pencarian lebiih di persempit
2. penambahan hasil notulen
3. penambahan kategori surat keluar
-->
