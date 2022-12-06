'use strict'
import { CallAjax, Loading, Modal, StatusNotification } from './module/index.js'

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

    // ============== Xử lí khi ở trong form vẫn chưa xong ==============
    $$('.btn-delete').forEach(element => {
      element.onclick = function () {
        Loading(
          '.table tbody',
          '../assets/img/loading2.gif',
          'white',
          '100px',
          'center 0'
        )

        const btnType = this.dataset.type

        switch (btnType) {
          case 'form': {
            const btnId = this.dataset.id

            CallAjax({
              url: '../manufacturers/process-delete.php',
              data: { id: btnId },
              titleError: 'Thất Bại',
              titleSuccess: 'Thành Công',
              contentSuccess: 'Bạn đã xóa 1 nhà sản xuất !',
            })
            break
          }
          case 'table': {
            // Get id of button
            const btnId = this.dataset.id

            // Handle when success delete
            const handleSuccess = () => this.closest('tr').remove()

            // Show notification when success delete
            const handleDelete = response => {
              StatusNotification({
                response: JSON.parse(response),
                handleSuccess,
                subMessage: 'nhà sản xuất',
              })
              $('.loading') && $('.loading').remove()
            }

            // Call ajax do get response data (status code & status message)
            if (confirm('Bạn có chắc muốn xóa nhà sản xuất này không ???'))
              CallAjax({
                url: '../manufacturers/process-delete.php',
                data: { id: btnId },
                handleData: handleDelete,
              })
            else $('.loading') && $('.loading').remove()
            break
          }
          case 'control': {
            // Handle when success delete
            const handleSuccess = () => {
              checkboxCheckeds.elements.forEach(element => {
                element.remove()
              })
              _this.handleEventAgain()
            }

            // Show notification when success delete
            const handleDelete = response => {
              StatusNotification({
                response: JSON.parse(response),
                handleSuccess,
                subMessage: 'nhà sản xuất',
              })
              $('.loading') && $('.loading').remove()
            }

            // Call ajax do get response data (status code & status message)
            CallAjax({
              url: '../manufacturers/process-delete.php',
              data: { id: checkboxCheckeds.ids },
              handleData: handleDelete,
            })
            break
          }

          default:
            alert('Error: NOT FIND TYPE OF BUTTON DELETE')
            $('.loading') && $('.loading').remove()
        }
      }
    })
  },
  handleEvent: function () {
    this.handleEventAgain()

    const _this = this

    $('.control__icon.btn-reload').onclick = function () {
      Loading(
        '.table',
        '../assets/img/loading2.gif',
        'white',
        '100px',
        'center 0'
      )

      const handleReload = response => {
        const data = JSON.parse(response)
        _this.render(data)
        controlCheckbox.checked = false
        $('.loading') && $('.loading').remove()
      }

      CallAjax({
        url: '../manufacturers/load-data.php',
        handleData: handleReload,
      })
    }

    // ============== Xử lí handleDataResponse Chưa xong ==============
    $('.control__icon.btn-add').onclick = function () {
      $('.modal-container').style.display = 'block'

      const handleDataResponse = response => {
        $('.loading') && $('.loading').remove()
      }

      const handleModal = () => {
        $('.btn-submit').onclick = function () {
          Loading(
            '#wrapper',
            '../assets/img/loading2.gif',
            'white',
            '200px',
            'center 0'
          )

          let formData = {}
          $$('.form-insert .form-input').forEach(e => {
            formData[e.name] = e.value
          })

          CallAjax({
            url: '../manufacturers/process-insert.php',
            data: formData,
            handleData: handleDataResponse,
          })
        }
      }

      Modal({ handleModal })
    }
  },
  start: function () {
    this.handleEvent()
  },
}

App.start()
