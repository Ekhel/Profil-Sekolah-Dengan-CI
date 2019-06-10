<div class="row">
  <div class="container-fluid">
    <div class="col-lg-12">
        <div class="sparkline12-list shadow-reset mg-t-30">
            <div class="sparkline12-graph">
                <div class="basic-login-form-ad">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="all-form-element-inner">
                                <form action="<?php echo base_url()?>Guru/edit_guru_proses" method="post">
                                   <div class="form-group-inner">
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <label class="login2 pull-right pull-right-pro">Nama</label>
                                        </div>
                                        <div class="col-lg-9">
                                          <input name="id_guru" type="hidden" id="id_guru" class="form-control" />
                                          <input name="id_sekolah" type="hidden" value="<?php echo $this->session->userdata('id_sekolah') ?>" class="form-control" />
                                          <input name="nama_guru" id="nama_guru" type="text" class="form-control" />
                                        </div>
                                    </div>
                                  </div>
                                  <div class="form-group-inner">
                                   <div class="row">
                                       <div class="col-lg-2">
                                           <label class="login2 pull-right pull-right-pro">Status</label>
                                       </div>
                                       <div class="col-lg-9">
                                         <select name="status" id="status" class="form-control">
                                             <option value="pns">PNS</option>
                                             <option value="kontrak">Kontrak</option>
                                         </select>
                                       </div>
                                   </div>
                                 </div>
                                 <div class="form-group-inner">
                                  <div class="row">
                                      <div class="col-lg-2">
                                          <label class="login2 pull-right pull-right-pro">Sertifikasi</label>
                                      </div>
                                      <div class="col-lg-9">
                                        <select name="sertifikasi" id="sertifikasi" class="form-control">
                                            <option value="sudah">Sudah</option>
                                            <option value="belum">Belum</option>
                                        </select>
                                      </div>
                                  </div>
                                </div>
                                <div class="form-group-inner">
                                 <div class="row">
                                     <div class="col-lg-2">
                                         <label class="login2 pull-right pull-right-pro">Pend.Terahir</label>
                                     </div>
                                     <div class="col-lg-9">
                                       <select name="pend_terahir" id="pend_terahir" class="form-control">
                                           <option value="D3">D3</option>
                                           <option value="S1">S1</option>
                                           <option value="S2">S2</option>
                                           <option value="S3">S3</option>
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
