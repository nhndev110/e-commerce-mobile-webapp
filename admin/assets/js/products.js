'use strict'
import { SubmitForm, DeleteItem } from './module/App.js'

console.log('check')

$(document).ready(function () {
    $('.btn-submit').on('click', function (e) {
        let btnStyle = $(this).data('style')
        let form = $('#form-update')[0]
        let formData = new FormData(form)
        if (btnStyle === 'update') {
            SubmitForm({
                url: '../products/process_update.php',
                data: formData,
                toastContent: 'Bạn đã cập nhật thành công 1 sản phẩm',
                contentType: false,
                processData: false,
            })
        } else if (btnStyle === 'create') {
            SubmitForm({
                url: '../products/process_insert.php',
                data: formData,
                toastContent: 'Bạn đã tạo thành công 1 sản phẩm',
                contentType: false,
                processData: false,
            })
        }
    })

    $('.btn-delete').on('click', function () {
        let thisBtn = $(this)
        let btnStyle = thisBtn.data('style')
        let btnData = thisBtn.data('id')
        if (btnStyle === 'delete-form') {
            DeleteItem({
                url: '../products/process_delete.php',
                data: btnData,
                toastContent: 'Bạn đã xóa 1 sản phẩm !',
            })
        } else if (btnStyle === 'delete-table') {
            let isSuccess = (check) => {
                if (check === 1) {
                    thisBtn.closest('tr').fadeOut()
                    setTimeout(() => thisBtn.closest('tr').remove(), 300)
                }
            }
            DeleteItem({
                url: '../products/process_delete.php',
                data: btnData,
                toastContent: 'Bạn đã xóa 1 sản phẩm !',
                fn: isSuccess,
            })
        }
    })
})
