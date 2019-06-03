<div class="data-table-area mg-b-40">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
              <?php echo $this->session->flashdata('msg');?>
              <?php echo $this->session->flashdata('msg1');?>
              <div class="sparkline13-list shadow-reset">
                <div class="sparkline13-list shadow-reset">
                  <div class="sparkline13-hd">
                    <div class="main-sparkline13-hd">
                        <h1>Data <span class="table-project-n">Guru & Tenaga Pendidik Sekolah</span></h1>
                        <div class="sparkline13-outline-icon">
                            <span><a data-toggle="modal" href="#modal_tambah" title="Tambah Data" class="btn btn-primary btn-sm"><i class="fa fa-plus-circle"></i></a></i></span>
                        </div>
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
                                      <th></th>
                                      <th></th>
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
                                    <td><a href="#"><i class="fa fa-edit"></i></a></td>
                                    <td><a href="<?php echo base_url()?>Guru/hapus_guru/<?php echo $item->id_guru ?>" onclick="return confirm('Hapus item ini Dari Database ?')"><i class="fa fa-trash"></i></a></td>
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

<div class="modal fade" id="modal_tambah" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id=""><i class="fa fa-plus-circle"></i> Form Tambah Data Guru</h4>
			</div>
			<div class="modal-body">
        <?php $this->load->view('tambah-guru'); ?>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
			</div>
		</div>
	</div>
</div>
