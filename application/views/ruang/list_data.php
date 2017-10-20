<?php
$no = 1;
  foreach ($dataRuang as $ruang) {
    ?>
    <tr>
      <td><?php echo $no; ?></td>
      <td><?php echo $ruang->nama_ruang; ?></td>
      <td><?php echo $ruang->kapasitas; ?></td>
      <td><?php $data = $ruang->status;
            if ($data == '0'){
                echo 'Available';
            } else {
                echo 'Booking';
            }
        ?></td>
      <td class="text-center" style="min-width:250px;">
        <button class="btn btn-warning update-dataRuang" data-id="<?php echo $ruang->id_ruang; ?>"><i class="glyphicon glyphicon-repeat"></i> Update</button>
        <button class="btn btn-danger konfirmasiHapus-ruang" data-id="<?php echo $ruang->id_ruang; ?>" data-toggle="modal" data-target="#konfirmasiHapus"><i class="glyphicon glyphicon-remove-sign"></i> Delete</button>
        <!--<button class="btn btn-info detail-dataRuang" data-id="<?php echo $ruang->id_ruang; ?>"><i class="glyphicon glyphicon-info-sign"></i> Detail</button>-->
      </td>
    </tr>
    <?php
    $no++;
  }
?>

