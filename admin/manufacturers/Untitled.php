<?php foreach ($result as $each) { ?>
<tr>
  <td class="table__row--center">
    <label class="table__col flex-center" for="table-col-<?= $each['id'] ?>">
      <input data-id=<?= $each['id'] ?> type="checkbox" name="" class="table__col--checkbox"
      id="table-col-<?= $each['id'] ?>">
    </label>
  </td>
  <td class="table__row--center">
    <?= $each['id'] ?>
  </td>
  <td class="table__row--center">
    <?= $each['name'] ?>
  </td>
  <td class="vertical-align">
    <?= $each['address'] ?>
  </td>
  <td class="table__row--center">
    <?= $each['phone'] ?>
  </td>
  <td class="table__row--center">
    <button class="table__col flex-center" title="Chỉnh Sửa"
      href="../manufacturers/form_update.php?id=<?= $each['id'] ?>">
      <ion-icon name="color-wand"></ion-icon>
    </button>
  </td>
  <td class="table__row--center">
    <button class="table__col btn-delete flex-center" title="Xóa" data-type="table" data-id="<?= $each['id'] ?>">
      <ion-icon name="trash-outline"></ion-icon>
    </button>
  </td>
</tr>
<?php } ?>