'use strict'
import { SubmitForm, Loading, Toast } from './module/index.js'

const $ = document.querySelector.bind(document)
const $$ = document.querySelectorAll.bind(document)

let controlCheckbox = null
let checkboxRows = []

const App = {
  render: function () {
    const handleRender = data => {
      if (data.statusCode === 200) {
        const rowsData = data.data
        const htmlRows = rowsData.map(row => {
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

        let nodetbody = $('tbody')
        !nodetbody && (nodetbody = document.createElement('tbody'))
        nodetbody.innerHTML = htmlRows.join('')
        $('table').appendChild(nodetbody)

        $('.loading') && $('.loading').remove()
      }
    }

    SubmitForm({ url: './process-reload.php', handleData: handleRender })
  },
  handleEvent: function () {
    const _this = this
    let controlCheckbox = $('#control__checkbox--all')
    let checkboxRows = [...$$('.table__col--checkbox')]

    // Checkbox All Checked
    controlCheckbox.onchange = () =>
      checkboxRows.forEach(e => (e.checked = controlCheckbox.checked))

    // Checkbox only one Checked
    console.log(checkboxRows)
    checkboxRows.forEach(element => {
      console.log(element)
      // element.onclick = function (e) {
      //   console.log(e.target)
      // }
    })

    // checkboxRows.forEach(checkboxRow => {
    //   checkboxRow.onchange = () => {
    //     let i = 0
    //     while (checkboxRows[i]) {
    //       if (checkboxRows[i].checked === false) {
    //         controlCheckbox.checked = false
    //         break
    //       }
    //       ++i
    //     }
    //     i === checkboxRows.length && (controlCheckbox.checked = true)
    //   }
    // })

    $('.btn-reload').onclick = function () {
      Loading(
        'table tbody',
        '../assets/images/loading2.gif',
        'white',
        '200px',
        'center 0'
      )

      _this.render()
    }

    $$('.btn-delete').forEach(element => {
      element.onclick = function () {
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
          Loading(
            '.table tbody',
            '../assets/images/loading2.gif',
            'white',
            '200px',
            'center 0'
          )

          const handleDelete = data => {
            if (data.statusCode === 200) {
              Toast({
                title: 'Thành Công',
                msg: data.message + ' nhà sản xuất',
                type: 'success',
                duration: 3000,
              })
              this.closest('tr').remove()
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
          Loading(
            '.table tbody',
            '../assets/images/loading2.gif',
            'white',
            '200px',
            'center 0'
          )

          const checkboxRows = [...$$('.table__col--checkbox')]
          let checkboxIds = []
          let elementsChecker = []
          checkboxRows.forEach(element => {
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
            $('.loading') && $('.loading').remove()
          }

          SubmitForm({
            url: '../manufacturers/process_delete.php',
            data: { id: checkboxIds },
            handleData: handleDelete,
          })
        }
      }
    })
  },
  start: function () {
    Loading(
      'body',
      '../assets/images/loading3.gif',
      'blue',
      '400px',
      'center',
      'none'
    )
    this.render()
    this.handleEvent()
  },
}

App.start()
