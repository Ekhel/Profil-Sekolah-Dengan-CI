<div class="container-fluid">
  <div class="row">
    <div class="col-lg-12">
      <table id="MapsOnTable">
        
      </table>
    </div>
  </div>
</div>

<script type="text/javascript">
    $(function () {
      $('#MapsOnTable').DataTable({
        ajax:{
          url:'<?php echo base_url()?>json/demta.json',
          dataSrc:'Features'
        };
      });
    };

</script>
