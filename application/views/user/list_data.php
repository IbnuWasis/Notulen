<?php
foreach ($dataAdmin as $admin) {
    ?>
    <tr>
      <td style="min-width:230px;"><?php echo $admin->nama; ?></td>
      <td><?php echo $admin->jabatan; ?></td>
      <td><?php echo $admin->username; ?></td>
      <td><?php echo $admin->akses; ?></td>
      <td class="text-center" style="min-width:230px;">
        <button class="btn btn-warning update-dataUser" data-id="<?php echo $admin->id_user; ?>"><i class="glyphicon glyphicon-repeat"></i> Update</button>
        <button class="btn btn-danger konfirmasiHapus-user" data-id="<?php echo $admin->id_user; ?>" data-toggle="modal" data-target="#konfirmasiHapus"><i class="glyphicon glyphicon-remove-sign"></i> Delete</button>
      </td>
    </tr>
    <?php
  }
?>

