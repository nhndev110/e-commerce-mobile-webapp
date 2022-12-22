'use strict'

import { CallAjax, Loading, Modal, StatusNotification } from './module/index.js'

const $ = document.querySelector.bind(document)
const $$ = document.querySelectorAll.bind(document)

const controlCheckbox = $('#control-checkbox-id')
const controlReload = $('.control-btn.btn-reload')
const controlCreate = $('.control-btn.btn-create')
const controlDelete = $('.control-btn.btn-delete')
const tbody = $('.table tbody')
const modalContainer = $('.modal-container')

const App = {
  // manufacturers: {},
  checkboxTable: [],
  getManufacturers(cb = () => {}) {
    fetch('./load-data.php')
      .then(res => res.json())
      .then(cb)
  },
  renderManufacturers(data) {
    if (data.statusCode === 200) {
      const htmlRows = data.data.map(
        row => `
          <tr>
            <td class="table-row-center">
              <label class="table-col flex-center" for="table-col-${row['id']}">
                <input data-id=${row['id']} type="checkbox" name="" class="table-col-checkbox" id="table-col-${row['id']}">
              </label>
            </td>
            <td class="table-row-center">${row['id']}</td>
            <td class="table-row-center">${row['name']}</td>
            <td class="vertical-align">${row['address']}</td>
            <td class="table-row-center">${row['phone']}</td>
            <td class="table-row-center">
              <button class="table-col flex-center" title="Chỉnh Sửa" data-id="${row['id']}">
                <ion-icon name="color-wand"></ion-icon>
              </button>
            </td>
            <td class="table-row-center">
              <button class="table-col btn-delete flex-center" title="Xóa" data-type="table" data-id="${row['id']}">
                <ion-icon name="trash-outline"></ion-icon>
              </button>
            </td>
          </tr>
        `
      )
      tbody.innerHTML = htmlRows.join('')
    }
  },
  // Checkbox All Checked
  handleCheckbox() {
    // this.checkboxTable = [...$$('.table-col-checkbox')]
    // let checkboxCheckeds = {
    //   ids: [],
    //   elements: [],
    // }
    // // Checkbox only one Checked
    // this.checkboxTable.forEach(element => {
    //   element.onchange = e => {
    //     const _this = e.target
    //     if (_this.checked === true) {
    //       checkboxCheckeds.elements.push(_this.closest('tr'))
    //       checkboxCheckeds.ids.push(_this.dataset.id)
    //     } else {
    //       let idIdx = checkboxCheckeds.ids.indexOf(_this.dataset.id)
    //       let elementIdx = checkboxCheckeds.elements.indexOf(
    //         _this.closest('tr')
    //       )
    //       checkboxCheckeds.ids.splice(idIdx, 1)
    //       checkboxCheckeds.elements.splice(elementIdx, 1)
    //     }
    //     let cntTrue = 0
    //     checkboxTable.forEach(element => element.checked && ++cntTrue)
    //     cntTrue == checkboxTable.length
    //       ? (controlCheckbox.checked = true)
    //       : (controlCheckbox.checked = false)
    //   }
    // })
  },
  handleDeleteBtn() {
    const _this = this

    controlDelete.onclick = function () {
      const handleSuccess = () => {
        checkboxCheckeds.elements.forEach(element => element.remove())
      }

      // Show notification when success delete
      const handleDelete = res => {
        StatusNotification({
          response: JSON.parse(res),
          handleSuccess,
          subMessage: 'nhà sản xuất',
        })
        $('.loading') && $('.loading').remove()
      }

      // Check valid call ajax do get response data
      // (status code & status message)
      if (
        typeof checkboxCheckeds.ids.length === 'number' &&
        checkboxCheckeds.ids.length > 0 &&
        confirm('Bạn muốn xóa những nhà sản xuất bạn đã chọn ???')
      ) {
        CallAjax({
          url: '../manufacturers/process-delete.php',
          data: { id: checkboxCheckeds.ids },
          handleData: handleDelete,
        })
      } else {
        if (typeof checkboxCheckeds.ids.length !== 'number')
          alert('Error: datatype invalid !!')
        if (checkboxCheckeds.ids.length <= 0)
          alert('Bạn chưa chọn nhà sản xuất nào !!!')
        $('.loading') && $('.loading').remove()
      }
    }

    // $$('.btn-delete').forEach(element => {
    //   element.onclick = function () {
    //     Loading(
    //       '.table tbody',
    //       '../assets/img/loading2.gif',
    //       'white',
    //       '100px',
    //       'center 0',
    //       '16'
    //     )

    //     const btnType = this.dataset.type

    //     switch (btnType) {
    //       case 'form': {
    //         const btnId = this.dataset.id

    //         CallAjax({
    //           url: '../manufacturers/process-delete.php',
    //           data: { id: btnId },
    //           titleError: 'Thất Bại',
    //           titleSuccess: 'Thành Công',
    //           contentSuccess: 'Bạn đã xóa 1 nhà sản xuất !',
    //         })
    //         break
    //       }
    //       case 'table': {
    //         // Get id of button
    //         const btnId = this.dataset.id

    //         // Handle when success delete
    //         const handleSuccess = () => this.closest('tr').remove()

    //         // Show notification when success delete
    //         const handleDelete = response => {
    //           StatusNotification({
    //             response: JSON.parse(response),
    //             handleSuccess,
    //             subMessage: 'nhà sản xuất',
    //           })
    //           $('.loading') && $('.loading').remove()
    //         }

    //         // Call ajax do get response data (status code & status message)
    //         if (confirm('Bạn muốn xóa nhà sản xuất này ???'))
    //           CallAjax({
    //             url: '../manufacturers/process-delete.php',
    //             data: { id: btnId },
    //             handleData: handleDelete,
    //           })
    //         else $('.loading') && $('.loading').remove()
    //         break
    //       }
    //       case 'control': {
    //         // Handle when success delete

    //         break
    //       }

    //       default:
    //         alert('Error: NOT FIND TYPE OF BUTTON DELETE')
    //         $('.loading') && $('.loading').remove()
    //     }
    //   }
    // })
  },
  handleEvent() {
    const _this = this
    this.checkboxTable = [...$$('.table-col-checkbox')]

    controlCheckbox.onchange = function () {
      const __this = this
      _this.checkboxTable.forEach(element => {
        element.checked = __this.checked

        let idIdx = checkboxCheckeds.ids.indexOf(element.dataset.id)
        let elementIdx = checkboxCheckeds.elements.indexOf(
          element.closest('tr')
        )
        if (__this.checked === true) {
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

    controlReload.onclick = function () {
      Loading(
        '.table',
        '../assets/img/loading2.gif',
        'white',
        '100px',
        'center 0',
        '16'
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
  },
  handleCreateManufacturer() {
    controlCreate.onclick = function () {
      modalContainer.style.display = 'block'

      const _this = this
      const formInput = $$('.form-insert .form-input')

      let formData = {}

      // Xử lí sau khi thêm nhà sản xuất thành công
      const handleSuccess = () => {
        // Thêm 1 phần tử vào bảng
        const htmlRows = document.createElement('tr')
        htmlRows.innerHTML = `
          <td class="table-row-center">
            <label class="table-col flex-center" for="table-col-${formData['idInsert']}">
              <input data-id="${formData['idInsert']}" type="checkbox" name="" class="table-col-checkbox" id="table-col-${formData['idInsert']}">
            </label>
          </td>
          <td class="table-row-center">${formData['idInsert']}</td>
          <td class="table-row-center">${formData['name']}</td>
          <td class="vertical-align">${formData['address']}</td>
          <td class="table-row-center">${formData['phone']}</td>
          <td class="table-row-center">
            <button class="table-col flex-center" title="Chỉnh Sửa" href="../manufacturers/form_update.php?id=${formData['idInsert']}">
              <ion-icon name="color-wand" role="img" class="md hydrated" aria-label="color wand"></ion-icon>
            </button>
          </td>
          <td class="table-row-center">
            <button class="table-col btn-delete flex-center" title="Xóa" data-type="table" data-id="${formData['idInsert']}">
              <ion-icon name="trash-outline" role="img" class="md hydrated" aria-label="trash outline"></ion-icon>
            </button>
          </td>
        `
        tbody.appendChild(htmlRows)

        // Trả lại giá trị rỗng cho tất cả các ô input
        formInput.forEach(e => (e.value = null))

        // Ẩn form thêm
        modalContainer.style.display = 'none'

        // _this.handleEventAgain()
      }

      // Xử lí giá trị trả về
      const handleResponse = response => {
        response = JSON.parse(response)

        // Thêm vào dữ liệu trả về phần id của nhà sản xuất sau khi thêm
        Object.assign(formData, { idInsert: response.idInsert })

        StatusNotification({
          response,
          handleSuccess,
          subMessage: 'nhà sản xuất',
        })

        $('.loading') && $('.loading').remove()
      }

      // Gửi dữ liệu của các ô input để thêm nhà sản xuất
      const handleDataModal = () => {
        $('.btn-submit').onclick = () => {
          Loading(
            '#wrapper',
            '../assets/img/loading2.gif',
            'black',
            '100px',
            'center'
          )

          formInput.forEach(e => (formData[e.name] = e.value))

          CallAjax({
            url: '../manufacturers/process-insert.php',
            data: formData,
            handleData: handleResponse,
          })
        }
      }

      $('.btn-reset').onclick = () => formInput.forEach(e => (e.value = null))

      Modal({ handleModal: handleDataModal })
    }
  },
  start() {
    const _this = this

    _this.getManufacturers(_this.renderManufacturers)

    _this.handleEvent()

    _this.handleCreateManufacturer()

    _this.handleDeleteBtn()

    _this.handleCheckbox()
  },
}

App.start()
