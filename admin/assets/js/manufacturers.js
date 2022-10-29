'use strict'
import { SubmitForm, Loading, Toast } from './module/index.js'

const controlCheckbox = document.querySelector('#control__checkbox--all')
const checkboxCols = Array(
  ...document.querySelectorAll('.table__col--checkbox')
)

// Checkbox All Checked
controlCheckbox.onchange = () =>
  checkboxCols.forEach(e => (e.checked = controlCheckbox.checked))

// Checkbox only one Checked
checkboxCols.forEach(checkbox => {
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

    const handleDelete = ({ title, type, msg = '', duration }) => {
      Toast({ title, type, msg: msg + ' nhà sản xuất', duration })
      $(this).closest('tr').fadeOut()
      setTimeout(() => $(this).closest('tr').remove(), 300)
    }

    SubmitForm({
      url: '../manufacturers/process_delete.php',
      data: { id: btnId },
      fn: handleDelete,
    })
  } else if (btnType === 'control') {
    Loading(
      '.table tbody',
      '../assets/images/loading2.gif',
      'white',
      '200px',
      'center 0'
    )

    // while (checkboxIds.length > 0) {
    //   checkboxIds.pop()
    // }
    // while (elementsChecker.length > 0) {
    //   elementsChecker.pop()
    // }

    let checkboxIds = []
    let elementsChecker = []
    checkboxCols.forEach(element => {
      if (element.checked) {
        elementsChecker.push(element.closest('tr'))
        checkboxIds.push(element.dataset.id)
      }
    })

    // Khi xóa mảng rồi vẫn còn giá trị cũ trong array
    console.log(
      'checkboxIds:',
      checkboxIds,
      'elementsChecker:',
      elementsChecker
    )

    const handleDelete = ({ title, type, msg = '', duration }) => {
      Toast({ title, type, msg: msg + ' nhà sản xuất', duration })
      elementsChecker.forEach(e => e.remove())
      $('.loading').remove()

      console.log(
        'checkboxIds:',
        checkboxIds,
        'elementsChecker:',
        elementsChecker
      )
    }

    SubmitForm({
      url: '../manufacturers/process_delete.php',
      data: { id: checkboxIds },
      fn: handleDelete,
    })
  }
})
