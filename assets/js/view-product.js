$(document).ready(function () {
    $('.btn-add-to-cart').click(function (e) {
        let id = $(this).data('id')
        $.ajax({
            url: './add-to-cart.php',
            type: 'POST',
            data: {
                id,
            },
            success(response) {
                if (response == -1) {
                    alert('id không tồn tại')
                } else {
                    $('#products-in-cart').text(response)
                }
            },
            error(xhr) {
                console.error(xhr.statusText)
            },
        })
    })
})
