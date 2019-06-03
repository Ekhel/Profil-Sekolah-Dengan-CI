<div class="row">
  <div class="container-fluid">
    <div class="col-lg-12">
        <div class="sparkline12-list shadow-reset mg-t-30">
            <div class="sparkline12-graph">
                <div class="basic-login-form-ad">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="all-form-element-inner">
                                <form action="<?php echo base_url()?>Fasilitas/tambah_fasilitas_proses" method="post">
                                  <div class="form-group-inner">
                                    <div class="row">
                                      <input name="id_sekolah" type="hidden" value="<?php echo $this->session->userdata('id_sekolah') ?>" class="form-control" />
                                      <div class="col-lg-2">
                                         <label class="login2 pull-right pull-right-pro">jenis</label>
                                      </div>
                                       <div class="col-lg-9">
                                         <select name="jenis" class="form-control">
                                             <option value="Sarana">Sarana</option>
                                         </select>
                                       </div>
                                    </div>
                                   </div>
                                   <div class="form-group-inner">
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <label class="login2 pull-right pull-right-pro">Nama</label>
                                        </div>
                                        <div class="col-lg-9">
                                          <select name="id_ref" class="chosen-select form-control">
                                           <option value="">-- Pilih --</option>
                                            <?php
                                            foreach($ref as $r => $val)
                                            {?>
                                            <option value="<?php echo $val->id_ref;?>"><?php echo $val->nama_ref; ?></option>
                                            <?php
                                            }?>
                                         </select>
                                        </div>
                                    </div>
                                  </div>
                                  <div class="form-group-inner">
                                   <div class="row">
                                       <div class="col-lg-2">
                                           <label class="login2 pull-right pull-right-pro">Jumlah</label>
                                       </div>
                                       <div class="col-lg-9">
                                         <input name="jumlah" type="text" class="form-control" onkeypress="return isNumberKey(event)" />
                                       </div>
                                   </div>
                                 </div>
                                 <div class="form-group-inner">
                                  <div class="row">
                                      <div class="col-lg-2">
                                          <label class="login2 pull-right pull-right-pro">Satuan</label>
                                      </div>
                                      <div class="col-lg-9">
                                        <select name="satuan" class="form-control">
                                            <option value="unit">Unit</option>
                                            <option value="kelas">kelas</option>
                                            <option value="ruangan">ruangan</option>
                                        </select>
                                      </div>
                                  </div>
                                </div>
                                <div class="form-group-inner">
                                 <div class="row">
                                   <div class="col-lg-2">
                                   </div>
                                   <div class="col-lg-2">
                                     <input type="submit" class="btn btn-primary" value="Simpan">
                                   </div>
                                 </div>
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
</div>

<script type="text/javascript">
   function isNumberKey(evt){
      var charCode = (evt.which) ? evt.which : event.keyCode;
      if (charCode != 46 && charCode > 31 && (charCode < 48 || charCode > 57))
      return false;
      return true;
    }
 </script>
