'use strict'
import { Toast } from './App.js'

export default function DeleteItem({
    url = '',
    type = 'POST',
    dataType = 'html',
    data = '',
    toastTitle = 'Thành Công',
    toastContent = '',
    contentType = 'application/x-www-form-urlencoded; charset=UTF-8',
    processData = true,
    fn = () => {},
}) {
    $.ajax({
        url,
        type,
        dataType,
        contentType,
        processData,
        data: { id: data },
        success(response) {
            if (response == 1) {
                Toast({
                    title: toastTitle,
                    status: 'success',
                    content: toastContent,
                    duration: 3000,
                })
                fn(1)
            } else {
                Toast({
                    title: 'Lỗi',
                    status: 'error',
                    content: response,
                    duration: 5000,
                })
            }
        },
        error() {
            console.log('error: DeleteItem')
        },
    })
}
