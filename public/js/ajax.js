    function addToCart(id){
        $.ajax({
            url:'/addToCart',
            type: 'POST',
            data: {"_token": $('meta[name="csrf-token"]').attr('content'), 'id': id},
            dataType:'json',
            success: function ($data) {
                if($data['success']){
                    $('#addToCart_'+id).hide();
                    $('#deleteFromCart_'+id).show();
                    $('.totalCount').text($data['totalCount']);
                    $('.totalPrice').text($data['totalPrice']);
                }
            },
            error: function (){
                alert('Error')
            }
        });
    }

    function deleteFromCart(id) {
        $.ajax({
            url:'/deleteFromCart',
            type: 'POST',
            data: {"_token": $('meta[name="csrf-token"]').attr('content'), 'id': id},
            dataType:'json',
            success: function ($data) {
                if($data['success']){
                    $('#deleteFromCart_'+id).hide();
                    $('#addToCart_'+id).show();
                    $('.totalCount').text($data['totalCount']);
                    $('.totalPrice').text($data['totalPrice']);
                }
            },
            error: function (){
                alert('Error')
            }
        });
    }

