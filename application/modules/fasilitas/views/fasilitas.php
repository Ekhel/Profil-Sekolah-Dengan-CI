<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<link rel="stylesheet" href="<?php echo base_url()?>assets/css/select2/select2.min.css">
<link rel="stylesheet" href="<?php echo base_url()?>assets/css/chosen/bootstrap-chosen.css">

<div class="data-table-area mg-b-40">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
              <?php echo $this->session->flashdata('hapus');?>
              <?php echo $this->session->flashdata('update');?>
              <?php echo $this->session->flashdata('tambah');?>
              <div class="sparkline13-list shadow-reset">
                <div class="sparkline13-hd">
                  <div class="main-sparkline13-hd">
                      <h1>Data <span class="table-project-n">Sarana & Prasarana Sekolah</span></h1>
                      <div class="sparkline13-outline-icon">
                          <span><a data-toggle="modal" href="#modal_tambah" title="Tambah Data" class="btn btn-primary btn-sm"><i class="fa fa-plus-circle"></i></a></i></span>
                      </div>
                  </div>
                </div>
                <div class="sparkline12-hd">
                  <div class="sparkline12-graph">
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
                                    <th></th>
                                    <th></th>
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
                                  <td>
                                    <a href="javascript:; #modal_edit" data-toggle="modal"><i class="fa fa-edit" onclick="edit(
                                      '<?php echo $item->id_fasilitas ?>',
                                      '<?php echo $item->id_sekolah ?>',
                                      '<?php echo $item->jenis ?>',
                                      '<?php echo $item->id_ref ?>',
                                      '<?php echo $item->jumlah ?>',
                                      '<?php echo $item->satuan ?>',
                                      )"></i></a>
                                  </td>
                                  <td><a href="<?php echo base_url()?>Fasilitas/hapus_fasilitas/<?php echo $item->id_fasilitas ?>" onclick="return confirm('Hapus item ini Dari Database ?')"><i class="fa fa-trash"></i></a></td>
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

<div class="modal fade" id="modal_tambah" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id=""><i class="fa fa-plus-circle"></i> Form Tambah Data Fasilitas</h4>
			</div>
			<div class="modal-body">
        <?php $this->load->view('tambah-fasilitas'); ?>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="modal_edit" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id=""><i class="fa fa-plus-circle"></i> Form edit Fasilitas</h4>
			</div>
			<div class="modal-body">
        <?php $this->load->view('edit-fasilitas'); ?>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
  function edit(id_fasilitas,id_sekolah,jenis,id_ref,jumlah,satuan)
  {
    $("#id_fasilitas").val(id_fasilitas);
    $("#id_sekolah").val(id_sekolah);
    $("#jenis").val(jenis);
    $("#id_ref").val(id_ref);
    $("#jumlah").val(jumlah);
    $("#satuan").val(satuan);
  }

</script>

<script src="<?php echo base_url()?>assets/js/chosen/chosen.jquery.js"></script>
 <script src="<?php echo base_url()?>assets/js/chosen/chosen-active.js"></script>
 <!-- select2 JS
 ============================================ -->
 <script src="<?php echo base_url()?>assets/js/select2/select2.full.min.js"></script>
 <script src="<?php echo base_url()?>assets/js/select2/select2-active.js"></script>
