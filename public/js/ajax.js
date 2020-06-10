function addOrDeleteFromCart(id, toggle) {
    $.ajax({
        url: '/addOrDeleteFromCart',
        type: 'POST',
        data: {"_token": $('meta[name="csrf-token"]').attr('content'), 'id': id, 'toggle': toggle},
        dataType: 'json',
        success: function ($data) {
            if ($data['success']) {
                console.log($data['cartItem']);
                if ($data['cartItem']) {
                    $('#addToCart_' + id).hide();
                    $('#deleteFromCart_' + id).show();
                } else {
                    $('#deleteFromCart_' + id).hide();
                    $('#addToCart_' + id).show();
                }

                $('.totalCount').text($data['totalCount']);
                $('.totalPrice').text($data['totalPrice']);
            }
        },
        error: function () {
            alert('Error')
        }
    });
}

/*function addToCart(id) {
    $.ajax({
        url: '/addToCart',
        type: 'POST',
        data: {"_token": $('meta[name="csrf-token"]').attr('content'), 'id': id},
        dataType: 'json',
        success: function ($data) {
            if ($data['success']) {
                console.log($data['cartItems'])
                $('#addToCart_' + id).hide();
                $('#deleteFromCart_' + id).show();
                $('.totalCount').text($data['totalCount']);
                $('.totalPrice').text($data['totalPrice']);
            }
        },
        error: function () {
            alert('Error')
        }
    });
}

function deleteFromCart(id) {
    $.ajax({
        url: '/deleteFromCart',
        type: 'POST',
        data: {"_token": $('meta[name="csrf-token"]').attr('content'), 'id': id},
        dataType: 'json',
        success: function ($data) {
            if ($data['success']) {
                console.log($data['cartItems'])
                $('#deleteFromCart_' + id).hide();
                $('#addToCart_' + id).show();
                $('.totalCount').text($data['totalCount']);
                $('.totalPrice').text($data['totalPrice']);
            }
        },
        error: function () {
            alert('Error')
        }
    });
}*/
