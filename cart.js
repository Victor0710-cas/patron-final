
        // Sample product data with images

        const products = [{
            id: 1,
            name: 'Droid powder',
            price: 50.99,
            productType: 'powder'
        },
        {
            id: 2,
            name: 'Droid Tablets',
            price: 250.99,
            productType: 'tablets'
        },
        {
            id: 3,
            name: 'Droid Syringe',
            price: 750.99,
            productType: 'syringe'
        },
        {
            id: 4,
            name: 'Droid juice',
            price: 75.00,
            productType: 'juice'
        },
        {
            id: 5,
            name: 'Droid chocolate',
            price: 25.00,
            productType: 'chocolate'
        },
        
        // Add details for other products
    ];

    // Cart data
    const cart = [];

    // Event listener for Add to Cart button
    $('.btn-add-to-cart').on('click', function () {
        const productId = $(this).data('product-id');
        const product = products.find(p => p.id === productId);
        const quantity = parseInt($(this).siblings('.quantity-input').find('.quantity').val());

        if (product) {
            // Add the product with quantity to the cart
            cart.push({
                ...product,
                quantity
            });
            updateCart();
        }
    });

    // Event listener for quantity buttons
    $('.quantity-btn').on('click', function () {
        const productId = $(this).data('product-id');
        const input = $(this).siblings('.quantity');
        var quantity = parseInt(input.val());

        if ($(this).hasClass('plus-btn')) {
            quantity++;
        } else if ($(this).hasClass('minus-btn') && quantity > 1) {
            quantity--;
        }

        input.val(quantity);
    });

    // Event listener for Remove button
    $('#cart-items').on('click', '.remove-btn', function () {
        const productId = $(this).data('product-id');
        const index = cart.findIndex(item => item.id === productId);

        if (index !== -1) {
            cart.splice(index, 1);
            updateCart();
        }
    });

    // Update the cart and display
    function updateCart() {
        const cartItems = $('#cart-items');
        const cartTotal = $('#cart-total');

        cartItems.empty();
        var total = 0;

        cart.forEach(item => {
            var imageUrl;
            // Check for specific products and assign corresponding images
            if (item.productType === 'powder') {
                imageUrl = 'img/powder.jpg';
            } else if (item.productType === 'tablets') {
                imageUrl = 'img/tablets.jpg';
            } else if (item.productType === 'juice') {
                imageUrl = 'img/juice.jpg';
            } else if (item.productType === 'chocolate') {
                imageUrl = 'img/drc.jpg';
            } else if (item.productType === 'syringe') {
                imageUrl = 'img/syringe.jpg';
            } else {
                // Use a default image for other products
                imageUrl = 'img/default.jpg';
            }

            const li = `<li>
          <img src="${imageUrl}" alt="${item.name}" style="width: 50px; height: 50px; margin-right: 10px;">
          ${item.name} - $${(item.price * item.quantity).toFixed(2)} (${item.quantity} items)
          <button class="remove-btn" data-product-id="${item.id}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
<path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708"/>
</svg></button>
      </li>`;
            cartItems.append(li);
            total += item.price * item.quantity;
        });

        cartTotal.text(`$${total.toFixed(2)}`);