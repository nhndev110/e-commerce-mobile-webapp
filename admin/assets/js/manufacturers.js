'use strict'
import { SubmitForm, DeleteItem } from './module/App.js'

$(document).ready(function () {
    $('.btn-submit').on('click', function (e) {
        const btnStyle = $(this).data('style')
        const formData = $('#form-update').serializeArray()
        if (btnStyle === 'update') {
            SubmitForm({
                url: '../manufacturers/process_update.php',
                data: formData,
                toastContent: 'Bạn đã cập nhật thành công 1 nhà sản xuất',
            })
        } else if (btnStyle === 'create') {
            SubmitForm({
                url: '../manufacturers/process_insert.php',
                data: formData,
                toastContent: 'Bạn đã tạo thành công 1 nhà sản xuất',
            })
        }
    })

    $('.btn-delete').on('click', function () {
        const thisBtn = $(this)
        const btnStyle = thisBtn.data('style')
        const btnData = thisBtn.data('id')
        if (btnStyle === 'delete-form') {
            DeleteItem({
                url: '../manufacturers/process_delete.php',
                data: btnData,
                toastContent: 'Bạn đã xóa 1 nhà sản xuất !',
            })
        } else if (btnStyle === 'delete-table') {
            let isSuccess = (check) => {
                if (check === 1) {
                    thisBtn.closest('tr').fadeOut()
                    setTimeout(() => thisBtn.closest('tr').remove(), 300)
                }
            }
            DeleteItem({
                url: '../manufacturers/process_delete.php',
                data: btnData,
                toastContent: 'Bạn đã xóa 1 nhà sản xuất !',
                fn: isSuccess,
            })
        }
    })
})
