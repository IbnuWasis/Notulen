<div class="col-md-offset-1 col-md-10 col-md-offset-1 well">
  <div class="form-msg"></div>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <h3 style="display:block; text-align:center;">Update Data Ruang</h3>

  <form id="form-update-ruang" method="POST">
    <input type="hidden" name="id_ruang" value="<?php echo $dataRuang->id_ruang; ?>">
    <div class="input-group form-group">
      <span class="input-group-addon" id="sizing-addon2">
        <i class="glyphicon glyphicon-user"></i>
      </span>
        <input type="text" class="form-control"  name="id_ruangan" value="<?php echo $dataRuang->id_ruang?>" disabled="true" aria-describedby="sizing-addon2">
    </div>
    <div class="input-group form-group">
      <span class="input-group-addon" id="sizing-addon2">
        <i class="glyphicon glyphicon-phone-alt"></i>
      </span>
        <input type="text" class="form-control" placeholder="Nama Ruangan" name="nama_ruangan" value="<?php echo $dataRuang->nama_ruang?>" aria-describedby="sizing-addon2">
    </div>
    <div class="input-group form-group">
      <span class="input-group-addon" id="sizing-addon2">
        <i class="glyphicon glyphicon-phone-alt"></i>
      </span>
        <input type="number" class="form-control" placeholder="Kapasitas" name="kapasitas" value="<?php echo $dataRuang->kapasitas?>" aria-describedby="sizing-addon2">
    </div>
    <div class="input-group form-group">
      <span class="input-group-addon" id="sizing-addon2">
        <i class="glyphicon glyphicon-home"></i>
      </span>
        <select name="status" class="form-control select2" aria-describedby="sizing-addon2" style="width: 75%">
          <option value='0'<?php if($dataRuang->status == '0'){echo "selected='selected'";} ?>>
           Available
          </option>
          <option value='1'<?php if($dataRuang->status == '1'){echo "selected='selected'";} ?>>
           Booking
          </option>
         
      </select>
    </div>
    <div class="form-group">
      <div class="col-md-12">
          <button type="submit" class="form-control btn btn-primary"> <i class="glyphicon glyphicon-ok"></i> Tambah Data</button>
      </div>
    </div>
  </form>
</div>


<script type="text/javascript">
$(function () {
    $(".select2").select2();

    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_flat-blue',
      radioClass: 'iradio_flat-blue'
    });
});
</script>