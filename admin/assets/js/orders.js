'use strict'

import { SubmitForm } from './module/App.js'

$(document).ready(function () {
    $('.btn-status').on('click', function () {
        const status = $(this).data('status')
        const id = $(this).data('id')
        const statusNode = $(this).closest('tr').find('.order-status')
        const statusChildNode = statusNode[0].children[0]
        let isSuccess = (check) => {
            switch (check) {
                case 1:
                    statusChildNode.innerText = 'Đã Duyệt'
                    break
                case 2:
                    statusChildNode.innerText = 'Đã Hủy'
                    break
                default:
                    statusChildNode.innerText = 'Không Xác Định'
                    break
            }
        }
        SubmitForm({
            url: '../orders/order-update.php',
            data: { id, status },
            toastContent: 'Bạn đã cập nhật thành công 1 đơn hàng',
            fn: isSuccess,
        })
    })
})
