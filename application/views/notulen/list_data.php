<?php
  foreach ($dataNotulen as $notulen) {
    ?>
    <tr>
      <td><?php echo $notulen->nomor; ?></td>
      <td><?php echo $notulen->tanggal; ?></td>
      <td><?php echo $notulen->judul; ?></td>
      <td><?php echo $notulen->nama; ?></td>
      <td><?php echo $notulen->ruang; ?></td>
      <td><?php echo $notulen->record; ?></td>
       <td><?php echo $notulen->pdf; ?></td>
      <td class="text-center" style="min-width:230px;">
        <button class="btn btn-warning update-dataPegawai" data-id="<?php echo $notulen->id; ?>"><i class="glyphicon glyphicon-repeat"></i> Update</button>
        <button class="btn btn-danger konfirmasiHapus-pegawai" data-id="<?php echo $notulen->id; ?>" data-toggle="modal" data-target="#konfirmasiHapus"><i class="glyphicon glyphicon-remove-sign"></i> Delete</button>
      </td>
    </tr>
    <?php
  }
?>

