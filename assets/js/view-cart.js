const nodePayPrice = document.getElementById('pay-price')
const nodeEmptyCart = $('#empty-cart')
const nodeInfoCart = $('#info-cart')

function totalPriceCalculate() {
    let nodeProductPrice = document.getElementsByClassName('product-price')
    let sum = 0
    for (element of nodeProductPrice) {
        sum += parseFloat(element.innerText)
    }
    return sum
}

function innerHtmlEmpty() {
    let nodeContent = document.getElementById('content')
    let html = `
        <div id="empty-cart">
            <div style="text-align: center; color: red;">
                <h3>Danh sách giỏ hàng đang trống</h3>
                <a href="./products.php">Mua sản phẩm</a>
            </div>
        </div>
    `
    nodeContent.innerHTML = html
}

$('.btn-update-quantity').click(function () {
    let id = $(this).data('id')
    let type = $(this).data('type')
    let nodeParent = $(this)[0].closest('tr')
    let nodeResultQuantiy = nodeParent.children[3].children[1]
    let nodePriceValue = parseFloat(
        nodeParent.children[2].children[0].innerText
    )
    let nodeTotalPrice = nodeParent.children[4].children[0].children[0]
    $.ajax({
        url: './update-quantity-cart.php',
        type: 'POST',
        data: {
            id,
            type,
        },
        success(response) {
            if (response == -1) {
                console.error('error: delete')
            } else if (response == -2) {
                nodeParent.remove()
                let tmp = parseInt($('#products-in-cart').text())
                $('#products-in-cart').text(--tmp)
            } else {
                nodeResultQuantiy.innerText = response
                nodeTotalPrice.innerText = +(nodePriceValue * response).toFixed(
                    1
                )
            }
        },
        error: function (xhr) {
            console.error(xhr.statusText)
        },
        complete() {
            let tmp = totalPriceCalculate()
            if (tmp > 0) {
                nodePayPrice.innerText = tmp
            } else {
                nodeInfoCart.remove()
                innerHtmlEmpty()
            }
        },
    })
})

$('.btn-delete-product').click(function () {
    const thisBtn = $(this)
    const id = thisBtn.data('id')
    $.ajax({
        url: './delete-products-cart.php',
        type: 'POST',
        data: {
            id,
        },
        success(response) {
            if (response == -1) {
                console.error('error: delete')
            } else {
                thisBtn.closest('tr').fadeOut(300, function () {
                    $(this).remove()

                    let check = totalPriceCalculate()
                    if (check > 0) {
                        nodePayPrice.innerText = check
                    } else {
                        nodeInfoCart.fadeOut(100, function () {
                            $(this).remove()
                            innerHtmlEmpty()
                        })
                    }
                    $('#products-in-cart').text(response)
                })
            }
        },
        error() {
            console.error('error: delete')
        },
    })
})

$(document).ready(function () {})
