'use strict'

export default function SubmitForm({
  url = '',
  type = 'POST',
  dataType = 'html',
  data = {},
  contentType = 'application/x-www-form-urlencoded; charset=UTF-8',
  processData = true,
  fn = () => {},
}) {
  $.ajax({
    url,
    type,
    dataType,
    data,
    contentType,
    processData,
    success(response) {
      response = JSON.parse(response)
      if (response.status === 200) {
        fn({
          title: 'Thành Công',
          msg: response.message,
          type: response.statusTest,
          duration: 3000,
        })
      } else if (response.status === 400) {
        // Toast({
        //   title: titleError,
        //   type: response.statusTest,
        //   msg: response.message,
        //   duration: 3000,
        // })
      } else if (response.status === 500) {
        // Toast({
        //   title: titleError,
        //   type: response.statusTest,
        //   msg: response.message,
        //   duration: 3000,
        // })
      }
    },
    error(xhr) {
      // Toast({
      //   title: xhr.statusText,
      //   type: 'error',
      //   msg: xhr.responseText,
      //   duration: 5000,
      // })
    },
  })
}
