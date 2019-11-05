<section class="content">
        <div class="container-fluid">
            <div class="body">
                            <ol class="breadcrumb">
                                <li><a href="surat_undangan.php">Surat Edaran</a></li>
                                <li class="active">Preview Surat</li>
                            </ol>
                        </div>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h4><p>Detial Arsip Surat</p></h4>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <div class="panel panel-default">
                        <div class="panel-heading">
                            <span class="title"><b>Detial Surat</b></span>
                        </div>
                        <div class="panel-body">
                            <form method="POST" action="edit_surat.php?id=<?php echo $data['id_surat'];?>" enctype="multipart/form-data" />
                              <div class="form-group form-float">
                                <label class="control-label">Nomor Surat</label>
                                <div class="form-line">
                                 <input type="hidden" name="id" value="<?php echo $id; ?>" />
                                  <input class="form-control" type="text" disabled name="nomor_surat" placeholder="Nomor Surat" required autofocus="autofocus" value="<?php echo $data['nomor_surat'];?>" />
                                </div>
                              </div>
                              <div class="form-group form-float">
                                <label class="control-label">Asal Surat</label>
                                <div class="form-line">
                                  <input class="form-control" type="text" disabled name="asal_surat" placeholder="Asal Surat" required autofocus="autofocus" value="<?php echo $data['asal_surat'];?>" />
                                </div>
                              </div>
                              <div class="form-group form-float">
                                <label class="control-label">Perihal</label>
                                <div class="form-line">
                                  <input class="form-control" type="text" disabled name="perihal" placeholder="Perihal" required autofocus="autofocus" value="<?php echo $data['perihal'];?>" />
                                </div>
                              </div>
                              <div class="form-group form-float">
                                <label class="control-label">Ringkasan</label>
                                <div class="form-line">
                                  <textarea class="wysiwyg-editor form-control" disabled name="ringkasan"><?php echo $data['ringkasan']; ?></textarea>
                                </div>
                              </div>
                              <div class="form-group form-float">
                                <label class="control-label">Tanggal</label>
                                <div class="form-line">
                                    <input class="date-picker form-control" name="tanggal" id="id-date-picker-1" placeholder="yyyy-mm-dd" type="date" disabled data-date-format="yyyy-mm-dd" required autofocus="autofocus" value="<?php echo $data['tanggal'];?>"/>
                                </div>
                              </div>
                              <div class="form-group form-float">
                                <label class="control-label">File</label>
                                <div class="form-line align-center">
                                   <?="<embed src='assets/upload/".$data['upload_file']." 'type='application/pdf 'style='width:500px; height:700px;'>"?>
                                   
                                </div>
                              </div><br>
                          <?php } ?>
                              <div class="form-actions align-center">
                                <button class="btn btn-info" name="submit" type="submit"> <i class="material-icons">mode_edit</i> Edit </button>
                                &nbsp; &nbsp; &nbsp;
                                <a class="btn btn-danger" href="surat_masuk.php?page=surat_masuk"> <i class="material-icons">highlight_off</i> Batal </a>
                              </div>
                              </form>
                                    </div>
                                </div>   
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>