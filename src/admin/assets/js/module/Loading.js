/**
 * @param {string} selectors Phần tử để append loading vào
 * @param {string} urlImg Đường link ảnh loading
 * @param {string} backgroundColor Chọn nền black hoặc white
 * @param {string} backgroundSize Kích thước của ảnh
 * @param {string} backgroundPosition Vị trí của ảnh
 *
 * @return {*}
 */

'use strict'
const $ = document.querySelector.bind(document)

export default function Loading(
  selectors,
  urlImg,
  backgroundColor,
  backgroundSize,
  backgroundPosition,
  borderRadius = '0'
) {
  let nodeLoading = $('.loading')
  !nodeLoading &&
    (nodeLoading = document.createElement('div')) &&
    (nodeLoading.className = 'loading')

  const listBackground = {
    black: 'rgba(0, 0, 0, 0.4)',
    white: 'rgba(255, 255, 255, 0.5)',
    blue: '#ECF8FE',
  }

  Object.assign(nodeLoading.style, {
    content: '',
    position: 'absolute',
    top: 0,
    right: 0,
    bottom: 0,
    left: 0,
    zIndex: 10000,
    background: `${listBackground[backgroundColor]} url(${urlImg}) no-repeat ${backgroundPosition} / ${backgroundSize}`,
    borderRadius: `${borderRadius}px`,
  })

  $(selectors).style.position = 'relative'
  $(selectors).appendChild(nodeLoading)
}
