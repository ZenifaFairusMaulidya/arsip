<h3>Data Arsip Surat Permintaan</h3>
<div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
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
                                    <tbody>
                                        <?php 
                                            $no = 1;
                                            $koneksi = mysqli_connect("localhost", "root", "", "arsip");
                                            $query = mysqli_query($koneksi,"SELECT * FROM surat_masuk WHERE perihal LIKE '%Permintaan%'");
                                            while ($data = mysqli_fetch_array($query)) {
                                         ?>
                                        <tr>
                                            <td><?php echo $no; ?></td>
                                            <td><?php echo $data['asal_surat'] ?></td>
                                            <td><?php echo $data['nomor_surat'] ?></td>
                                            <td><?php echo $data['perihal'] ?></td>
                                            <td><?php echo $data['ringkasan'] ?></td>
                                            <td><?php echo $data['tanggal'] ?></td>
                                            <td><?php echo $data['upload_file'] ?></td>
                                            <td class="td-action">
                                                <div class="hidden-phone visible-desktop action-buttons">
                                                    <a class="green" href="preview_surat_permintaan.php?id=<?php echo $data['id_surat'];?>">
                                                        <i class="material-icons">zoom_in</i>
                                                    </a>
                                                    <a class="green" href="edit_surat.php?id=<?php echo $data['id_surat'];?>">
                                                        <i class="material-icons">mode_edit</i>
                                                    </a>
                                                    <a class="green" href="delete_surat.php?id=<?php echo $data['id_surat'];?>" onclick="return  confirm('Anda yakin ingin hapus data?')">
                                                        <i class="material-icons">delete</i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <?php $no++; } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>