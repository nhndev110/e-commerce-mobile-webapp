'use strict'

export default function FetchAPI({
  url = '',
  method = 'POST',
  data = {},
  // contentType = 'application/json',
  contentType = 'application/x-www-form-urlencoded; charset=UTF-8',
  cache = 'no-cache',
  handleResponse = () => {},
}) {
  fetch(url, {
    method,
    mode: 'cors',
    headers: {
      'Content-Type': contentType,
    },
    // body: JSON.stringify(data),
    body: new URLSearchParams(data),
  })
    .then(res => {
      return res.json()
    })
    .then(handleResponse)
    .catch(handleResponse)
}
