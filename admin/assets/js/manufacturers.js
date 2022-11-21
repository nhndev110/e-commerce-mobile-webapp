'use strict'
import { SubmitForm, Loading, Toast, Modal, Animation } from './module/index.js'

const $ = document.querySelector.bind(document)
const $$ = document.querySelectorAll.bind(document)

const controlCheckbox = $('#control__checkbox--all')
let checkboxRows = [...$$('.table__col--checkbox')]

const App = {
  render: function (response) {
    if (response.statusCode === 200) {
      const htmlRows = response.data.map(row => {
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
      $('tbody').innerHTML = htmlRows.join('')
      this.handleEventAgain()
    }
  },
  handleEventAgain: function () {
    const _this = this
    checkboxRows = [...$$('.table__col--checkbox')]

    let checkboxCheckeds = {
      ids: [],
      elements: [],
    }

    // Checkbox All Checked
    controlCheckbox.onchange = function () {
      const _this = this
      checkboxRows.forEach(element => {
        element.checked = _this.checked

        let idIdx = checkboxCheckeds.ids.indexOf(element.dataset.id)
        let elementIdx = checkboxCheckeds.elements.indexOf(
          element.closest('tr')
        )
        if (_this.checked === true) {
          if (idIdx == -1 && elementIdx == -1) {
            checkboxCheckeds.elements.push(element.closest('tr'))
            checkboxCheckeds.ids.push(element.dataset.id)
          }
        } else {
          checkboxCheckeds.elements.shift()
          checkboxCheckeds.ids.shift()
        }
      })
    }

    // Checkbox only one Checked
    checkboxRows.forEach(element => {
      element.onchange = e => {
        const _this = e.target
        if (_this.checked === true) {
          checkboxCheckeds.elements.push(_this.closest('tr'))
          checkboxCheckeds.ids.push(_this.dataset.id)
        } else {
          let idIdx = checkboxCheckeds.ids.indexOf(_this.dataset.id)
          let elementIdx = checkboxCheckeds.elements.indexOf(
            _this.closest('tr')
          )
          checkboxCheckeds.ids.splice(idIdx, 1)
          checkboxCheckeds.elements.splice(elementIdx, 1)
        }

        let cntTrue = 0
        checkboxRows.forEach(element => element.checked && ++cntTrue)
        cntTrue == checkboxRows.length
          ? (controlCheckbox.checked = true)
          : (controlCheckbox.checked = false)
      }
    })

    $$('.btn-delete').forEach(element => {
      element.onclick = function () {
        Loading(
          '.table tbody',
          '../assets/images/loading2.gif',
          'white',
          '200px',
          'center 0'
        )

        const btnType = this.dataset.type

        if (btnType === 'form') {
          const btnId = this.dataset.id
          SubmitForm({
            url: '../manufacturers/process_delete.php',
            data: { id: btnId },
            titleError: 'Thất Bại',
            titleSuccess: 'Thành Công',
            contentSuccess: 'Bạn đã xóa 1 nhà sản xuất !',
          })
        } else if (btnType === 'table') {
          const handleDelete = data => {
            if (data.statusCode === 200) {
              Toast({
                title: 'Thành Công',
                msg: data.message + ' nhà sản xuất',
                type: 'success',
                duration: 3000,
              })
              this.closest('tr').remove()
              _this.handleEventAgain()
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
            $('.loading') && $('.loading').remove()
          }

          const btnId = this.dataset.id
          SubmitForm({
            url: '../manufacturers/process_delete.php',
            data: { id: btnId },
            handleData: handleDelete,
          })
        } else if (btnType === 'control') {
          const handleDelete = data => {
            if (data.statusCode === 200) {
              Toast({
                title: 'Thành Công',
                msg: data.message + ' nhà sản xuất',
                type: 'success',
                duration: 3000,
              })

              checkboxCheckeds.elements.forEach(element => {
                element.remove()
              })
              _this.handleEventAgain()
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
            $('.loading') && $('.loading').remove()
          }

          SubmitForm({
            url: '../manufacturers/process_delete.php',
            data: { id: checkboxCheckeds.ids },
            handleData: handleDelete,
          })
        }
      }
    })
  },
  handleEvent: function () {
    this.handleEventAgain()

    const _this = this

    $('.btn-reload').onclick = function () {
      Loading(
        '.table',
        '../assets/images/loading2.gif',
        'white',
        '200px',
        'center 0'
      )

      const handleReload = data => {
        _this.render(data)
        controlCheckbox.checked = false
        $('.loading') && $('.loading').remove()
      }

      SubmitForm({ url: './process-reload.php', handleData: handleReload })
    }
  },
  start: function () {
    this.handleEvent()
    Modal()
  },
}

App.start()
