<div class="project-details-area mg-b-40">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
        <?php echo $this->session->flashdata('update');?>
        <?php echo $this->session->flashdata('lokasi_update');?>
        <div class="project-details-wrap shadow-reset">
          <?php foreach($profil as $item){?>
            <div class="row">
              <div class="col-xs-1">
              </div>
              <h4 class="text-uppercase"><strong>INDETITAS SEKOLAH</strong> <i class="fa fa-book"></i></h4>
              <hr/>
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                  <div class="project-details-mg">
                      <div class="row">
                          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                              <div class="project-details-st">
                                  <span><strong>Nama Sekolah :</strong></span>
                              </div>
                          </div>
                          <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                              <div class="project-list-ad">
                                <span class="text-uppercase"><?php echo $item->nama_sekolah ?></span>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="project-details-mg">
                      <div class="row">
                          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                              <div class="project-details-st">
                                  <span><strong>Kepala Sekolah :</strong></span>
                              </div>
                          </div>
                          <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                              <div class="project-details-dt">
                                  <span><?php echo $item->kepsek ?></span>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="project-details-mg">
                      <div class="row">
                          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                              <div class="project-details-st">
                                  <span><strong>NSS :</strong></span>
                              </div>
                          </div>
                          <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                              <div class="project-details-dt">
                                  <span><?php echo $item->nss ?></span>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="project-details-mg">
                      <div class="row">
                          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                              <div class="project-details-st">
                                  <span><strong>Status :</strong></span>
                              </div>
                          </div>
                          <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                              <div class="project-details-dt">
                                  <span><?php echo $item->status_kepemilikan ?></span>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="project-details-mg">
                      <div class="row">
                          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                              <div class="project-details-st">
                                  <span><strong>SK Pendirian :</strong></span>
                              </div>
                          </div>
                          <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                              <div class="project-details-dt">
                                  <span><?php echo $item->sk_pendirian ?></span>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="project-details-mg">
                      <div class="row">
                          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                              <div class="project-details-st">
                                  <span><strong>Tanggal SK :</strong></span>
                              </div>
                          </div>
                          <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                              <div class="project-details-dt">
                                  <span><?php echo $item->tanggal_sk ?></span>
                              </div>
                          </div>
                      </div>
                  </div>

                  <div class="project-details-mg">
                      <div class="row">
                          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                              <div class="project-details-st">
                                  <span><strong>Akreditasi :</strong></span>
                              </div>
                          </div>
                          <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                              <div class="project-details-dt">
                                  <span><?php echo $item->akreditasi ?></span>
                              </div>
                          </div>
                      </div>
                  </div>


              </div>
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="project-details-mg">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="project-details-st">
                                <span><strong>Distrik :</strong></span>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                            <div class="project-details-dt">
                                <span><?php echo $item->nama_distrik ?></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="project-details-mg">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="project-details-st">
                                <span><strong>Kampung / Kel :</strong></span>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                            <div class="project-details-dt">
                                <span><?php echo $item->nama_kampung ?></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="project-details-mg">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="project-details-st">
                                <span><strong>Luas Tanah :</strong></span>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                            <div class="project-details-dt">
                                <span><?php echo $item->luas_tanah ?></span>
                            </div>
                        </div>
                    </div>
                </div>
                  <div class="project-details-mg">
                      <div class="row">
                          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                              <div class="project-details-st">
                                  <span><strong>Alamat :</strong></span>
                              </div>
                          </div>
                          <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                              <div class="project-details-dt">
                                  <span><?php echo $item->alamat ?></span>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="project-details-mg">
                      <div class="row">
                          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                              <div class="project-details-st">
                                  <span><strong>Telp :</strong></span>
                              </div>
                          </div>
                          <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                              <div class="project-details-dt">
                                  <span><?php echo $item->telp ?></span>
                              </div>
                          </div>
                      </div>
                  </div>

                  <div class="project-details-mg">
                      <div class="row">
                          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                              <div class="project-details-st">
                                  <span><strong>Email :</strong></span>
                              </div>
                          </div>
                          <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                              <div class="project-details-dt">
                                  <span><?php echo $item->email ?></span>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="project-details-mg">
                      <div class="row">
                          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                              <div class="project-details-st">
                                  <span><strong>Web :</strong></span>
                              </div>
                          </div>
                          <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                              <div class="project-details-dt">
                                  <a href="<?php echo $item->web ?>" target="_blank"> [lihat web]</a>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
            </div>

            <hr/>
            <div class="row">
             <div class="col-lg-2">
                 <div class="project-pregress-details">
                    <a href="<?php echo base_url()?>Profil/edit_profil/<?php echo $item->id_sekolah ?>" class="btn btn-custon-three btn-primary"> Edit Profil</a>
                 </div>
             </div>
           </div>

        </div>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
        <div class="project-details-descri project-details-mg-t-30 shadow-reset">
          <img src="<?php echo base_url()?>assets/img/icon/pin.png" alt=""> <text><strong>Lokasi Sekolah</strong></text>
          <hr/>
          <div class="project-details-mg">
              <div class="row">
                  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                      <div class="project-details-st">
                          <span><strong>Latitude</strong></span>
                      </div>
                  </div>
                  <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                      <div class="project-details-dt">
                          <span><strong> :<?php echo $item->latitude ?></strong></span>
                      </div>
                  </div>
              </div>
          </div>
          <div class="project-details-mg">
              <div class="row">
                  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                      <div class="project-details-st">
                          <span><strong>Longitude</strong></span>
                      </div>
                  </div>
                  <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                      <div class="project-details-dt">
                          <span><strong> :<?php echo $item->longitude ?></strong></span>
                      </div>
                  </div>
              </div>
              <hr/>
              <a href="<?php echo base_url()?>Profil/edit_lokasi/<?php echo $item->id_sekolah ?>" class="btn btn-primary"> Ubah Lokasi</a>
              <a href="#" class="btn btn-success"> Lihat Lokasi</a>
          </div>
        </div>
      </div>
      <?php } ?>
    </div>
  </div>
</div>
