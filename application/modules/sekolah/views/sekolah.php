<div class="breadcome-area mg-b-30">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcome-list map-mg-t-40-gl shadow-reset">
                        <div class="breadcome-heading">
                            <h2>INDENTITAS SEKOLAH</h2>
                        </div>
                        <ul class="breadcome-menu">
                            <li><a href="#">Sekolah</a> <span class="bread-slash">/</span>
                            </li>
                            <li><a href="#">Detail Sekolah</a> <span class="bread-slash">/</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php foreach($sekolah as $item){?>
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-12">
      <div class="sparkline12-list shadow-reset" style="background-image:url(https://mdn.mozillademos.org/files/13026/fire-ball-icon.png)">
        <div class="sparkline13-hd">
          <h1 class="text-uppercase italic"><strong><?php echo $item->nama_sekolah ?> </strong></h1> <br/>
          <img src="<?php echo base_url()?>assets/img/icon/pin.png" alt=""> <text class="small mutted"> Lat,Lon : <?php echo $item->latitude ?> , <?php echo $item->longitude ?></text>
        </div>
      </div>
    </div>
  </div>
</div>
<br/>
<div class="project-details-area mg-b-40">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
        <div class="project-details-descri shadow-reset">
          <div class="contact-client-img contact-img-v2">
            <img class="center" src="<?php echo base_url()?>assets/img/logo/sekolah_logo.png" width="130px" alt="">
          </div>
          <div class="project-details-mg">
            <div class="container-fluid">
              <div class="">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                  <text><i class="fa fa-user"></i> Kepsek</text>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                  <label>: <?php echo $item->kepsek ?></label>
                </div>
              </div>
            </div>
          </div>
          <div class="project-details-mg">
            <div class="container-fluid">
              <div class="">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                  <text><i class="fa fa-star"></i> Akre</text>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                  <label>: <?php echo $item->akreditasi ?></label>
                </div>
              </div>
            </div>
          </div>
          <div class="project-details-mg">
            <div class="container-fluid">
              <div class="">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                  <text><i class="fa fa-book"></i> Kuriku</text>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                  <label>: </label>
                </div>
              </div>
            </div>
          </div>
          <div class="project-details-mg">
            <div class="container-fluid">
              <div class="">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                  <text><i class="fa fa-book"></i> NSS</text>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                  <label>: <?php echo $item->nss ?></label>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
        <div class="project-details-wrap shadow-reset">
          <div class="row">
            <div class="admintab-wrap mg-b-40">
              <ul class="nav nav-tabs custom-menu-wrap custon-tab-menu-style1">
                <li class="active"><a data-toggle="tab" href="#profil"><span class="adminpro-icon adminpro-analytics tab-custon-ic"></span>Profil</a>
                </li>
                <li><a data-toggle="tab" href="#sarpras"><span class="adminpro-icon adminpro-analytics-arrow tab-custon-ic"></span>Sarpras</a>
                </li>
                <li><a data-toggle="tab" href="#tendik"><span class="adminpro-icon adminpro-analytics-bridge tab-custon-ic"></span>Tendik</a>
                </li>
              </ul>
            <div class="tab-content">
              <div id="profil" class="tab-pane in active animated flipInX custon-tab-style1">
                <div class="container-fluid">
                  <div class="row">
                    <div class="col-lg-8">
                      <div class="sparkline12-list shadow-reset">
                        <div class="sparkline12-hd">
                          <div class="main-sparkline12-hd">
                              <h4>Indentitas <span class="table-project-n">Sekolah</span></h4>
                          </div>
                        </div>
                        <div class="sparkline12-hd">
                          <div class="project-details-mg">
                            <div class="row">
                              <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                <text> NSS</text>
                              </div>
                              <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                <label>: <?php echo $item->nss ?></label>
                              </div>
                            </div>
                          </div>
                          <div class="project-details-mg">
                            <div class="row">
                              <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                <text> Status</text>
                              </div>
                              <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                <label>: Negri</label>
                              </div>
                            </div>
                          </div>
                          <div class="project-details-mg">
                            <div class="row">
                              <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                <text> Jenjang</text>
                              </div>
                              <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                <label>: <?php echo $item->jenjang ?></label>
                              </div>
                            </div>
                          </div>
                          <div class="project-details-mg">
                            <div class="row">
                              <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                <text> Kepemilikan</text>
                              </div>
                              <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                <label>: Pemerintah Daerah</label>
                              </div>
                            </div>
                          </div>
                          <div class="project-details-mg">
                            <div class="row">
                              <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                <text> SK Pendirian</text>
                              </div>
                              <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                <label>: </label>
                              </div>
                            </div>
                          </div>
                          <div class="project-details-mg">
                            <div class="row">
                              <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                <text> Telfon</text>
                              </div>
                              <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                <label>: <?php echo $item->telp ?></label>
                              </div>
                            </div>
                          </div>
                          <div class="project-details-mg">
                            <div class="row">
                              <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                <text> Distrik</text>
                              </div>
                              <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                <label>: <?php echo $item->nama_distrik ?></label>
                              </div>
                            </div>
                          </div>
                          <div class="project-details-mg">
                            <div class="row">
                              <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                <text> Kam/kel</text>
                              </div>
                              <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                <label>: <?php echo $item->nama_kampung ?></label>
                              </div>
                            </div>
                          </div>
                          <div class="project-details-mg">
                            <div class="row">
                              <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                <text> email</text>
                              </div>
                              <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                <label>: <?php echo $item->email ?></label>
                              </div>
                            </div>
                          </div>
                          <div class="project-details-mg">
                            <div class="row">
                              <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                <text> Web</text>
                              </div>
                              <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                :<a href="<?php echo $item->web ?>"> [ Lihat Web ]</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="sparkline12-list shadow-reset">
                        <div class="sparkline12-hd">
                          <div class="main-sparkline12-hd">
                              <h4>Data  <span class="table-project-n">pelengkap</span></h4>
                          </div>

                        </div>
                        <div class="sparkline12-hd">
                          <div class="project-details-mg">
                            <div class="row">
                              <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                <text class="small muted"> Luas Tanah</text>
                              </div>
                              <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                <label>: </label>
                              </div>
                            </div>
                          </div>
                          <div class="project-details-mg">
                            <div class="row">
                              <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                <text class="small muted"> Kepemilikan</text>
                              </div>
                              <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                <label>: </label>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
              <div id="sarpras" class="tab-pane animated flipInX custon-tab-style1">
                <div class="container-fluid">
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="datatable-dashv1-list custom-datatable-overright">
                            <div id="toolbar-fasilitas">
                              <select class="form-control">
                                <option value="">Export Basic</option>
                                <option value="all">Export All</option>
                                <option value="selected">Export Selected</option>
                              </select>
                            </div>
                            <table id="table-fasilitas" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar-fasilitas">
                                <thead>
                                    <tr>
                                      <th data-field="no">No</th>
                                      <th data-field="jenis">JENIS</th>
                                      <th data-field="nama">NAMA</th>
                                      <th data-field="jumlah">JUMLAH</th>
                                      <th data-field="satuan">SATUAN</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  <?php
                                  $no = 1;
                                  foreach($fasilitas as $item){?>
                                  <tr>
                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo $item->jenis ?></td>
                                    <td><?php echo $item->nama_ref ?></td>
                                    <td><?php echo $item->jumlah ?></td>
                                    <td><?php echo $item->satuan ?></td>
                                  </tr>
                                  <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
              <div id="tendik" class="tab-pane animated flipInX custon-tab-style1">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                          <div class="sparkline13-list shadow-reset">
                            <div class="sparkline13-list shadow-reset">
                              <div class="sparkline13-hd">
                                <div class="main-sparkline13-hd">
                                    <h1>Data <span class="table-project-n">Guru & Tenaga Pendidik</span></h1>
                                </div>
                              </div>
                              <div class="sparkline12-hd">
                                <div class="sparkline12-graph">
                                  <div class="datatable-dashv1-list custom-datatable-overright">
                                        <div id="toolbar-guru">
                                          <select class="form-control">
                                            <option value="">Export Basic</option>
                                            <option value="all">Export All</option>
                                            <option value="selected">Export Selected</option>
                                          </select>
                                        </div>
                                        <table id="table-guru" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar-guru">
                                            <thead>
                                                <tr>
                                                  <th data-field="no">No</th>
                                                  <th data-field="nama">Nama</th>
                                                  <th data-field="status">status</th>
                                                  <th data-field="sertifikasi">sertifikasi</th>
                                                  <th data-field="pendidikan">Pend. Terahir</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                              <?php
                                              $no = 1;
                                              foreach($guru as $item){?>
                                              <tr>
                                                <td><?php echo $no++ ?></td>
                                                <td><?php echo $item->nama_guru ?></td>
                                                <td><?php echo $item->status ?></td>
                                                <td><?php echo $item->sertifikasi ?></td>
                                                <td><?php echo $item->pend_terahir ?></td>
                                              </tr>
                                              <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php } ?>
