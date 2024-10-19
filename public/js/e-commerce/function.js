$(() => {
    $('.checkout-post').on('click', function () {
        let productId = $(this).data('product-id');
        $.ajax({
            url: '/card',
            method: 'POST',
            data: {
                product_id: productId
            },
            success: function (response) {
                console.log(response);
                const productCount = +$('#cart-count').text();
                $('#cart-count').text(productCount + 1);
            }
        })
    });
    document.querySelector('input[name="qty"]').addEventListener('keydown', function(e) {
        if (e.key === 'Enter') {
            e.preventDefault(); // Prevent form submission on Enter
            this.form.submit();  // Submit the form manually, sending only the input's value
        }
    });
});