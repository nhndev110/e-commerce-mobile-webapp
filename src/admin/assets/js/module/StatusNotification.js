import Toast from './Toast.js'

const StatusNotification = ({ response = {}, subMessage = '' }) => {
  return new Promise((res, rej) => {
    switch (response.statusCode) {
      case 200:
        Toast({
          title: 'Thành Công',
          msg: `${response.message} ${subMessage}`,
          type: 'success',
          duration: 3000,
        })
        res()
        break
      case 400:
        Toast({
          title: 'Lỗi',
          msg: response.message,
          type: 'error',
          duration: 5000,
        })
        break
      case 500:
        Toast({
          title: 'Lỗi',
          msg: response.message,
          type: 'info',
          duration: 5000,
        })
        break
      default:
        Toast({
          title: response.statusText,
          type: 'error',
          msg: response.responseText,
          duration: 5000,
        })
    }
  })
}

export default StatusNotification
