'use strict'

export default function FetchAPI({
  url = '',
  method = 'POST',
  data = {},
  // contentType = 'application/json',
  contentType = 'application/x-www-form-urlencoded; charset=UTF-8',
  cache = 'no-cache',
}) {
  return new Promise((resolve, reject) => {
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
        if (!res.ok) {
          throw new Error(res.statusText)
        }
        return res.json()
      })
      .then(data => resolve(data))
      .catch(err => reject(err))
  })
}
