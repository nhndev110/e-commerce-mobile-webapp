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
export default function Loading(
  selectors,
  urlImg,
  backgroundColor,
  backgroundSize,
  backgroundPosition
) {
  if (!$('.loading').length) {
    const listBackground = {
      black: 'rgba(0, 0, 0, 0.4)',
      white: 'rgba(255, 255, 255, 0.6)',
    }
    $(selectors).append("<div class='loading'></div>")
    $(selectors).css({ position: 'relative' })
    $('.loading').css({
      content: '',
      position: 'absolute',
      top: 0,
      right: 0,
      bottom: 0,
      left: 0,
      'z-index': 1000,
      'background-color': 'rgba(255, 255, 255, 0.6)',
      'background-color': listBackground[backgroundColor],
      'background-image': `url(${urlImg})`,
      'background-repeat': 'no-repeat',
      'background-position': backgroundPosition,
      'background-size': backgroundSize,
      'border-radius': '16px',
    })
  }
}
