<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<div class="row">
  <div class="container-fluid">
    <div class="col-lg-12">
        <div class="sparkline12-list shadow-reset mg-t-30">
            <div class="sparkline12-hd">
                <div class="main-sparkline12-hd">
                    <h1> Form Edit Lokasi Sekolah </h1>
                    <div class="sparkline12-outline-icon">
                        <span class="sparkline12-collapse-link"><i class="fa fa-chevron-up"></i></span>
                        <span><i class="fa fa-wrench"></i></span>
                        <span class="sparkline12-collapse-close"><i class="fa fa-times"></i></span>
                    </div>
                </div>
            </div>
            <div class="sparkline12-graph">
                <div class="basic-login-form-ad">
                    <div class="row">
                        <div class="col-lg-12">
                            <?php foreach($profil as $item){?>
                            <div class="all-form-element-inner">
                                <form action="<?php echo base_url()?>Profil/edit_lokasi_proses" method="post">
                                  <div class="form-group-inner">
                                    <div class="row">
                                      <div class="col-lg-2">
                                         <label class="login2 pull-right pull-right-pro">Nama Sekolah</label>
                                      </div>
                                       <div class="col-lg-9">
                                          <input name="id_sekolah" value="<?php echo $item->id_sekolah ?>" type="hidden" class="form-control" />
                                          <input name="nama_sekolah" value="<?php echo $item->nama_sekolah ?>" readonly="true" type="text" required="false" class="form-control" />
                                       </div>
                                    </div>
                                   </div>
                                   <div class="form-group-inner">
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <label class="login2 pull-right pull-right-pro">Lat, Long</label>
                                        </div>
                                        <div class="col-lg-4">
                                            <input name="latitude" value="<?php echo $item->latitude ?>" type="text" class="form-control" />

                                        </div>
                                        <div class="col-lg-4">
                                            <input name="longitude" value="<?php echo $item->longitude ?>" type="text" class="form-control" />
                                        </div>
                                    </div>
                                  </div>
                                 <div class="form-group-inner">
                                  <div class="row">
                                      <div class="col-lg-2">
                                          <label class="login2 pull-right pull-right-pro">Peta</label>
                                      </div>
                                      <div class="col-lg-9">
                                          <?php echo $map['html'] ?>
                                      </div>
                                  </div>
                                </div>
                                <div class="form-group-inner">
                                 <div class="row">
                                   <div class="col-lg-2">
                                   </div>
                                   <div class="col-lg-2">
                                     <input type="submit" class="btn btn-primary" value="Update">
                                     <a class="btn btn-danger" href="<?php echo base_url()?>Profil">Batal</a>
                                   </div>
                                 </div>
                               </div>
                          </form>
                        </div>
                      <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
  </div>
</div>

<script type="text/javascript">
  function setMapToForm(latitude, longitude)
  {
    $('input[name="latitude"]').val(latitude);
    $('input[name="longitude"]').val(longitude);
  }
</script>
