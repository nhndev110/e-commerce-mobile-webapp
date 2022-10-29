'use strict'

export default function SubmitForm({
  url = '',
  type = 'POST',
  dataType = 'html',
  data = {},
  contentType = 'application/x-www-form-urlencoded; charset=UTF-8',
  processData = true,
  handleData = () => {},
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
      handleData(response)
    },
    error(xhr) {
      handleData(xhr)
    },
  })
}
