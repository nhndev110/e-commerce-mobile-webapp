'use strict'
import { SubmitForm } from './module/index.js'

const controlCheckbox = document.querySelector('#control__checkbox--all')
const checkboxCols = document.querySelectorAll('.table__col--checkbox')

// Checkbox All Checked
controlCheckbox.onchange = (e) =>
  checkboxCols.forEach((e) => (e.checked = controlCheckbox.checked))

// Checkbox only one Checked
checkboxCols.forEach((checkbox) => {
  checkbox.onchange = () => {
    let i = 0
    while (checkboxCols[i]) {
      if (checkboxCols[i].checked === false) {
        controlCheckbox.checked = false
        break
      }
      ++i
    }
    if (i === checkboxCols.length) {
      controlCheckbox.checked = true
    }
  }
})

$(function () {})

$('.btn-submit').on('click', function (e) {
  const btnType = $(this).data('type')
  const formData = $('#form-update').serializeArray()
  if (btnType === 'update') {
    SubmitForm({
      url: '../manufacturers/process_update.php',
      data: formData,
      toastContent: 'Bạn đã cập nhật thành công 1 nhà sản xuất',
    })
  } else if (btnType === 'create') {
    SubmitForm({
      url: '../manufacturers/process_insert.php',
      data: formData,
      toastContent: 'Bạn đã tạo thành công 1 nhà sản xuất',
    })
  }
})

$('.btn-delete').on('click', function () {
  const btnType = $(this).data('type')
  if (btnType === 'form') {
    const btnId = $(this).data('id')
    SubmitForm({
      url: '../manufacturers/process_delete.php',
      data: { id: btnId },
      titleError: 'Thất Bại',
      titleSuccess: 'Thành Công',
      contentSuccess: 'Bạn đã xóa 1 nhà sản xuất !',
    })
  } else if (btnType === 'table') {
    const btnId = $(this).data('id')
    let isSuccess = (check) => {
      if (check === 1) {
        $(this).closest('tr').fadeOut()
        setTimeout(() => $(this).closest('tr').remove(), 300)
      }
    }
    SubmitForm({
      url: '../manufacturers/process_delete.php',
      data: { id: btnId },
      titleError: 'Thất Bại',
      titleSuccess: 'Thành Công',
      contentSuccess: 'Bạn đã xóa 1 nhà sản xuất !',
      fn: isSuccess,
    })
  } else if (btnType === 'control') {
    // const btnIds =
    // SubmitForm({
    //   url: '../manufacturers/process_delete.php',
    //   data: { id: btnIds },
    //   titleError: 'Thất Bại',
    //   titleSuccess: 'Thành Công',
    //   contentSuccess: 'Bạn đã xóa 1 nhà sản xuất !',
    //   fn: isSuccess,
    // })
  }
})
