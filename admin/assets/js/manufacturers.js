'use strict'
import { SubmitForm, Loading, Toast } from './module/index.js'

const controlCheckbox = document.querySelector('#control__checkbox--all')
let checkboxCols = Array(...document.querySelectorAll('.table__col--checkbox'))

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

function handleBtnSubmit() {
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
}

function handleBtnDelete() {
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

      const handleDelete = data => {
        if (data.statusCode === 200) {
          Toast({
            title: 'Thành Công',
            msg: data.message + ' nhà sản xuất',
            type: 'success',
            duration: 3000,
          })
          $(this).closest('tr').fadeOut()
          setTimeout(() => $(this).closest('tr').remove(), 300)
        } else if (data.statusCode === 400) {
          Toast({
            title: 'Lỗi',
            msg: data.message,
            type: 'error',
            duration: 5000,
          })
        } else if (data.statusCode === 500) {
          Toast({
            title: 'Lỗi',
            msg: data.message,
            type: 'info',
            duration: 5000,
          })
        } else {
          Toast({
            title: data.statusText,
            type: 'error',
            msg: data.responseText,
            duration: 5000,
          })
        }
      }

      SubmitForm({
        url: '../manufacturers/process_delete.php',
        data: { id: btnId },
        handleData: handleDelete,
      })
    } else if (btnType === 'control') {
      Loading(
        '.table tbody',
        '../assets/images/loading2.gif',
        'white',
        '200px',
        'center 0'
      )

      checkboxCols = Array(
        ...document.querySelectorAll('.table__col--checkbox')
      )
      let checkboxIds = []
      let elementsChecker = []
      checkboxCols.forEach(element => {
        if (element.checked) {
          elementsChecker.push(element.closest('tr'))
          checkboxIds.push(element.dataset.id)
        }
      })

      const handleDelete = data => {
        if (data.statusCode === 200) {
          Toast({
            title: 'Thành Công',
            msg: data.message + ' nhà sản xuất',
            type: 'success',
            duration: 3000,
          })
          elementsChecker.forEach(e => e.remove())
        } else if (data.statusCode === 400) {
          Toast({
            title: 'Lỗi',
            msg: data.message,
            type: 'error',
            duration: 5000,
          })
        } else if (data.statusCode === 500) {
          Toast({
            title: 'Lỗi',
            msg: data.message,
            type: 'info',
            duration: 5000,
          })
        } else {
          Toast({
            title: data.statusText,
            type: 'error',
            msg: data.responseText,
            duration: 5000,
          })
        }
        $('.loading').remove()
      }

      SubmitForm({
        url: '../manufacturers/process_delete.php',
        data: { id: checkboxIds },
        handleData: handleDelete,
      })
    }
  })
}

function handleBtnReload() {
  $('.btn-reload').click(function () {
    Loading(
      '.table tbody',
      '../assets/images/loading2.gif',
      'white',
      '200px',
      'center 0'
    )

    const handleReload = data => {
      if (data.statusCode === 200) {
        let rows = data.data
        let htmlRows = rows.map(row => {
          return `
          <tr>
            <td class="table__row--center">
              <label class="table__col flex-center" for="table-col-${row['id']}">
                <input
                  data-id=${row['id']}
                  type="checkbox"
                  name=""
                  class="table__col--checkbox"
                  id="table-col-${row['id']}"
                >
              </label>
            </td>
            <td class="table__row--center">${row['id']}</td>
            <td class="table__row--center">${row['name']}</td>
            <td class="vertical-align">${row['address']}</td>
            <td class="table__row--center">${row['phone']}</td>
            <td class="table__row--center">
              <a
                class="table__col flex-center"
                title="Chỉnh Sửa"
                href="../manufacturers/form_update.php?id=${row['id']}"
              >
                <ion-icon name="color-wand"></ion-icon>
              </a>
            </td>
            <td class="table__row--center">
              <button
                class="table__col btn-delete flex-center"
                title="Xóa"
                data-type="table"
                data-id="${row['id']}"
              >
                <ion-icon name="trash-outline"></ion-icon>
              </button>
            </td>
          </tr>`
        })
        let htmlRowsTable = htmlRows.join('')
        $('tbody').html(htmlRowsTable)
        handleBtnDelete()
      }
      $('.loading').remove()
    }

    SubmitForm({
      url: '../manufacturers/process-reload.php',
      handleData: handleReload,
    })
  })
}

$(function () {
  handleBtnSubmit()
  handleBtnDelete()
  handleBtnReload()
})
