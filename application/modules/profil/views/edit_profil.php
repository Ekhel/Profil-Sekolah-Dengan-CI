<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<div class="row">
  <div class="container-fluid">
    <div class="col-lg-12">
        <div class="sparkline12-list shadow-reset mg-t-30">
            <div class="sparkline12-hd">
                <div class="main-sparkline12-hd">
                    <h1> Form Edit Profil Sekolah </h1>
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
                              <form action="<?php echo base_url()?>Profil/edit_profil_proses" method="post">
                                <h2>DATA PROFIL</h2>
                                <hr/>
                                <div class="form-group-inner">
                                  <div class="row">
                                    <div class="col-lg-2">
                                       <label class="login2 pull-right pull-right-pro">Nama Sekolah</label>
                                    </div>
                                     <div class="col-lg-9">
                                        <input name="id_sekolah" value="<?php echo $item->id_sekolah ?>" type="hidden" class="form-control" />
                                        <input name="nama_sekolah" value="<?php echo $item->nama_sekolah ?>" type="text" required="false" class="form-control" />
                                     </div>
                                  </div>
                                 </div>
                                 <div class="form-group-inner">
                                  <div class="row">
                                      <div class="col-lg-2">
                                          <label class="login2 pull-right pull-right-pro">Jenjang</label>
                                      </div>
                                      <div class="col-lg-9">
                                          <input name="jenjang" value="<?php echo $item->jenjang ?>" type="text" class="form-control" />
                                      </div>
                                  </div>
                                </div>
                                <div class="form-group-inner">
                                 <div class="row">
                                     <div class="col-lg-2">
                                         <label class="login2 pull-right pull-right-pro">Kepala Sekolah</label>
                                     </div>
                                     <div class="col-lg-9">
                                         <input name="kepsek" value="<?php echo $item->kepsek ?>" type="text" class="form-control" />
                                     </div>
                                 </div>
                                </div>
                                <div class="form-group-inner">
                                <div class="row">
                                    <div class="col-lg-2">
                                        <label class="login2 pull-right pull-right-pro">NSS</label>
                                    </div>
                                    <div class="col-lg-9">
                                        <input name="nss" value="<?php echo $item->nss ?>" type="number" class="form-control" />
                                    </div>
                                </div>
                                </div>
                                <div class="form-group-inner">
                                <div class="row">
                                   <div class="col-lg-2">
                                       <label class="login2 pull-right pull-right-pro">Status Kepemilikan</label>
                                   </div>
                                   <div class="col-lg-9">
                                     <select name="status_kepemilikan" value="<?php echo $item->status_kepemilikan ?>" class="form-control">
                                         <option value="Pemerintah Daerah">Pemerintah Daerah</option>
                                         <option value="Swasta">Swasta</option>
                                         <option value="Sewa">Sewa</option>
                                         <option value="Pinjam">Pinjam</option>
                                     </select>
                                   </div>
                                </div>
                                </div>
                                <div class="form-group-inner">
                                <div class="row">
                                  <div class="col-lg-2">
                                      <label class="login2 pull-right pull-right-pro">SK Pendirian</label>
                                  </div>
                                  <div class="col-lg-9">
                                      <input name="sk_pendirian" value="<?php echo $item->sk_pendirian ?>" type="text" class="form-control" />
                                  </div>
                                </div>
                                </div>
                                <div class="form-group-inner">
                                <div class="row">
                                 <div class="col-lg-2">
                                     <label class="login2 pull-right pull-right-pro">Tanggal SK</label>
                                 </div>
                                 <div class="col-lg-9">
                                     <input name="tanggal_sk" value="<?php echo $item->tanggal_sk ?>" type="date" class="form-control" />
                                 </div>
                                </div>
                                </div>
                                <div class="form-group-inner">
                                <div class="row">
                                  <div class="col-lg-2">
                                      <label class="login2 pull-right pull-right-pro">Akreditasi</label>
                                  </div>
                                  <div class="col-lg-9">
                                    <select name="akreditasi" value="<?php echo $item->akreditasi ?>" class="form-control">
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="C">C</option>
                                        <option value="belum">Belum Akreditasi</option>
                                    </select>
                                  </div>
                                </div>
                                </div>
                                <h2>DATA LOKASI</h2>
                                <hr/>
                                <div class="form-group-inner">
                                 <div class="row">
                                     <div class="col-lg-2">
                                         <label class="login2 pull-right pull-right-pro">Distrik</label>
                                     </div>
                                     <div class="col-lg-9">
                                       
                                       <select name="id_distrik" id="id_distrik" value="<?php echo $item->id_distrik?>" class="form-control">
                                           <option value="">-- Pilih --</option>
                                            <?php
                                            foreach($distrik as $dis => $val)
                                            {?>
                                            <option value="<?php echo $val->id_distrik;?>"><?php echo $val->nama_distrik; ?></option>
                                            <?php
                                            }?>
                                         </select>
                                     </div>
                                 </div>
                                </div>
                                <div class="form-group-inner">
                                <div class="row">
                                    <div class="col-lg-2">
                                        <label class="login2 pull-right pull-right-pro">Kampung</label>
                                    </div>
                                    <div class="col-lg-9">
                                      <select name="id_kampung" value="<?php echo $item->id_kampung ?>" id="id_kampung" class="form-control">

                                      </select>
                                    </div>
                                </div>
                                </div>
                                <div class="form-group-inner">
                                <div class="row">
                                   <div class="col-lg-2">
                                       <label class="login2 pull-right pull-right-pro">Luas Tanah</label>
                                   </div>
                                   <div class="col-lg-9">
                                       <input name="luas_tanah" value="<?php echo $item->luas_tanah ?>" type="number" class="form-control" />
                                   </div>
                                </div>
                                </div>
                                <div class="form-group-inner">
                                <div class="row">
                                  <div class="col-lg-2">
                                      <label class="login2 pull-right pull-right-pro">Alamat</label>
                                  </div>
                                  <div class="col-lg-9">
                                    <textarea name="alamat" class="form-control" rows="8" cols="80"><?php echo $item->alamat ?></textarea>
                                  </div>
                                </div>
                                </div>
                                <h2>DATA PENDUKUNG</h2>
                                <hr/>
                                <div class="form-group-inner">
                                 <div class="row">
                                     <div class="col-lg-2">
                                         <label class="login2 pull-right pull-right-pro">Telfon</label>
                                     </div>
                                     <div class="col-lg-9">
                                         <input name="telp" value="<?php echo $item->telp ?>" type="text" class="form-control" />
                                     </div>
                                 </div>
                                </div>
                                <div class="form-group-inner">
                                <div class="row">
                                    <div class="col-lg-2">
                                        <label class="login2 pull-right pull-right-pro">Fax</label>
                                    </div>
                                    <div class="col-lg-9">
                                        <input name="fax" value="<?php echo $item->fax ?>" type="text" class="form-control" />
                                    </div>
                                </div>
                                </div>
                                <div class="form-group-inner">
                                <div class="row">
                                    <div class="col-lg-2">
                                        <label class="login2 pull-right pull-right-pro">email</label>
                                    </div>
                                    <div class="col-lg-9">
                                        <input name="email" value="<?php echo $item->email ?>" type="email" class="form-control" />
                                    </div>
                                </div>
                                </div>
                                <div class="form-group-inner">
                                <div class="row">
                                   <div class="col-lg-2">
                                       <label class="login2 pull-right pull-right-pro">Websait</label>
                                   </div>
                                   <div class="col-lg-9">
                                       <input name="web" value="<?php echo $item->web ?>" type="text" class="form-control" />
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
    $('select[name="id_distrik"]').on('change', function(e) {
      var id_distrik = $(this).val();
      if(id_distrik) {
          $.ajax({
              url: '<?php echo base_url("Profil/get_kampung/") ?>'+id_distrik,
              type: "GET",
              dataType: "json",
              success:function(data) {
                  $('select[name="id_kampung"]').empty();
                  $.each(data, function(key, value) {
                      $('select[name="id_kampung"]').append('<option value="'+ value.id_kampung +'">'+ value.nama_kampung+'</option>');

                  });
              }
          });
      }else{
          $('select[name="id_kampung"]').empty();
      }
    });
</script>
