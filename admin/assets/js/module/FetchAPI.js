'use strict'

const FetchAPI = ({
  url = '',
  method = 'POST',
  data = {},
  contentType = 'application/json',
}) => {
  return new Promise((res, rej) => {
    fetch(url, {
      method,
      mode: 'cors',
      headers: {
        'Content-Type': contentType,
      },
      // body: new URLSearchParams(data),
      body: JSON.stringify(data),
    })
      .then(res => {
        if (!res.ok) {
          throw new Error(res.statusText)
        }
        return res.json()
      })
      .then(data => res(data))
      .catch(err => rej(err))
  })
}

export default FetchAPI
