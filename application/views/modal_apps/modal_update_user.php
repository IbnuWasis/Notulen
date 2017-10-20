<div class="col-md-offset-1 col-md-10 col-md-offset-1 well">
  <div class="form-msg"></div>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <h3 style="display:block; text-align:center;">Update Data User</h3>

  <form id="form-update-user" method="POST" action="<?php echo base_url('apps/Ruang/prosesUpdate');?>">
     <input type="hidden" name="id" value="<?php echo $dataUser->id; ?>">
    <div class="input-group form-group">
      <span class="input-group-addon" id="sizing-addon2">
        <i class="glyphicon glyphicon-user"></i>
      </span>
        <input type="text" class="form-control" placeholder="Nama Pengguna" name="nama" value="<?php echo $dataUser->nama;?>" aria-describedby="sizing-addon2">
    </div>
    <div class="input-group form-group">
      <span class="input-group-addon" id="sizing-addon2">
        <i class="glyphicon glyphicon-phone-alt"></i>
      </span>
      <input type="text" class="form-control" placeholder="Username" name="username" value="<?php echo $dataUser->username;?>"  aria-describedby="sizing-addon2">
    </div>
      <div class="input-group form-group">
      <span class="input-group-addon" id="sizing-addon2">
        <i class="glyphicon glyphicon-home"></i>
      </span>
          <select name="jabatan" class="form-control select2" aria-describedby="sizing-addon2" style="width: 75%">
           <?php
            foreach ($dataPosisi as $posisi) {
              ?>
              <option value="<?php echo $posisi->id; ?>" <?php if($posisi->id == $dataUser->id_jabatan){echo "selected='selected'";} ?>>
                  <?php echo $posisi->nama; ?>
              </option>
              <?php
            }
            ?>
         
      </select>
    </div>
    <div class="input-group form-group">
      <span class="input-group-addon" id="sizing-addon2">
        <i class="glyphicon glyphicon-home"></i>
      </span>
        <select name="akses" class="form-control select2" aria-describedby="sizing-addon2" style="width: 75%">
          <?php
            foreach ($dataAkses as $akses) {
          ?>
          <option value="<?php echo $akses->id; if ($akses->id == $dataUser->akses){echo "selected='selected'";}?>">
           <?php echo $akses->deskripsi; ?>
          </option>
          <?php
        }
        ?>
         
      </select>
    </div>
    <div class="input-group form-group">
      <span class="input-group-addon" id="sizing-addon2">
        <i class="glyphicon glyphicon-phone-alt"></i>
      </span>
        <input type="password" class="form-control" placeholder="Password" name="password" value="<?php echo $dataUser->password;?>"  aria-describedby="sizing-addon2">
    </div>
    
    <div class="form-group">
      <div class="col-md-12">
          <button type="submit" class="form-control btn btn-primary"> <i class="glyphicon glyphicon-ok"></i> Update Data</button>
      </div>
    </div>
  </form>
</div>





