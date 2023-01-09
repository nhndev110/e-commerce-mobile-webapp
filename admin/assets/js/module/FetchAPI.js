'use strict'

// export default function CallAjax({
//   url = '',
//   type = 'POST',
//   dataType = 'html',
//   data = {},
//   contentType = 'application/x-www-form-urlencoded; charset=UTF-8',
//   cache = false,
//   processData = true,
//   handleData = () => {},
// }) {
//   $.ajax({
//     url,
//     type,
//     dataType,
//     data,
//     cache,
//     contentType,
//     processData,
//     success(response) {
//       handleData(response)
//     },
//     error(xhr) {
//       handleData(xhr)
//     },
//   })
// }

export default function FetchAPI({
  url = '',
  method = 'POST',
  dataType = 'json',
  data = {},
  contentType = 'application/json',
  cache = 'no-cache',
  processData = true,
  handleResponse = () => {},
}) {
  fetch(url, {
    method,
    headers: {
      contentType,
    },
    cache,
    body: JSON.stringify(data),
  })
    .then(res => res.json())
    .then(handleResponse)
    .catch(handleResponse)
}
