'use strict'

export default function CallAjax({
  url = '',
  type = 'POST',
  dataType = 'html',
  data = {},
  contentType = 'application/x-www-form-urlencoded; charset=UTF-8',
  cache = false,
  processData = true,
  handleData = () => {},
}) {
  $.ajax({
    url,
    type,
    dataType,
    data,
    cache,
    contentType,
    processData,
    success(response) {
      handleData(response)
    },
    error(xhr) {
      handleData(xhr)
    },
  })
}
