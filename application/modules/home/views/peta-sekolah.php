<?php echo $map['js'] ?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<div class="breadcome-area mg-b-30">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcome-list map-mg-t-40-gl shadow-reset">
                        <div class="breadcome-heading">
                            <h2>PETA SEBARAN SEKOLAH</h2>
                        </div>
                        <ul class="breadcome-menu">
                            <li><a href="#">Beranda</a> <span class="bread-slash">/</span>
                            </li>
                            <li><a href="#">Peta Sekolah</a> <span class="bread-slash">/</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
<br/>
<div class="google-maps-area mg-b-40">
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <div class="sparkline9-list shadow-reset">
          <div class="sparkline9-hd">
            <div class="main-sparkline9-hd">
              <h4>Form Pencarian <span class="table-project-n"> Data</span> Sekolah</h1>
              <div class="sparkline8-outline-icon">
                <span class="sparkline9-collapse-link"><i class="fa fa-chevron-up"></i></span>
                <span><i class="fa fa-wrench"></i></span>
                <span class="sparkline9-collapse-close"><i class="fa fa-times"></i></span>
              </div>
            </div>
          </div>
          <div class="sparkline9-graph">
            <div class="row">
              <form class="" action="index.html" method="post">
                <div class="form-group-inner">
                  <div class="row">
                    <div class="col-lg-3">
                      <label class="control-label">Distrik</label>
                    </div>
                    <div class="col-lg-8">
                      <select name="id_distrik" id="id_distrik" class="form-control">
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
                    <div class="col-lg-3">
                      <label class="control-label">Kampung</label>
                    </div>
                    <div class="col-lg-8">
                      <select name="id_kampung" id="id_kampung" class="form-control">
                        <option value="">--- Pilih ---</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="form-group-inner">
                  <div class="row">
                    <div class="col-lg-3">
                      <label class="control-label">Jenjang</label>
                    </div>
                    <div class="col-lg-8">
                      <select name="jenjang" class="form-control">
                          <option value="paud">PAUD / TK</option>
                          <option value="sd">SD</option>
                          <option value="smp">SMP / MTS</option>
                          <option value="sma">SMA / SMK </option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="form-group-inner">
                 <div class="row">
                   <div class="col-lg-3">
                   </div>
                   <div class="col-lg-2">
                     <input type="submit" class="btn btn-primary" value="Cari Data">
                   </div>
                 </div>
               </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-8">
        <div class="sparkline8-list ct-google-map-b-mg-30 shadow-reset">
          <div class="sparkline9-hd">
            <div class="main-sparkline9-hd">
              <h4>Peta Sekolah <span class="table-project-n"></span></h1>
              <div class="sparkline8-outline-icon">
                <span class="sparkline8-collapse-link"><i class="fa fa-chevron-up"></i></span>
                <span><i class="fa fa-wrench"></i></span>
                <span class="sparkline8-collapse-close"><i class="fa fa-times"></i></span>
              </div>
            </div>
          </div>
          <div class="sparkline8-graph">
            <div><?php echo $map['html'] ?></div>
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
              url: '<?php echo base_url("Home/getkampung/") ?>'+id_distrik,
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
