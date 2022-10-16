'use strict'
import { Toast } from './App.js'

export default function SubmitForm({
  url = '',
  type = 'POST',
  dataType = 'html',
  data = {},
  titleSuccess = '',
  contentSuccess = '',
  titleError = '',
  contentType = 'application/x-www-form-urlencoded; charset=UTF-8',
  processData = true,
  fn = () => {},
}) {
  $.ajax({
    url,
    type,
    dataType,
    data: data,
    contentType,
    processData,
    success(response) {
      if (response == 1) {
        Toast({
          title: titleSuccess,
          type: 'success',
          msg: contentSuccess,
          duration: 3000,
        })
        fn(1)
      } else if (response == 2) {
        Toast({
          title: titleSuccess,
          type: 'success',
          msg: contentSuccess,
          duration: 3000,
        })
        fn(2)
      } else {
        Toast({
          title: titleError,
          type: 'error',
          msg: response,
          duration: 5000,
        })
      }
    },
    error() {
      console.log('error: SubmitForm')
    },
  })
}
