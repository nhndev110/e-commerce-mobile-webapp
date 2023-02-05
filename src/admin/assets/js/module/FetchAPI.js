'use strict'

const FetchAPI = (url, requestInit) => {
  const {
    method = 'POST',
    mode = 'cors',
    data = {},
    contentType = 'application/json',
  } = requestInit

  return new Promise((res, rej) => {
    fetch(url, {
      method,
      mode,
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
