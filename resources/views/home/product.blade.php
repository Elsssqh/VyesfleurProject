<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Fresh Flower & Gifts</title>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@400;700&display=swap" rel="stylesheet">
    <style>
        /* CSS styles as before */
    </style>
</head>
<body>
    <section class="shop_section layout_padding">
        <div class="container">
            <div class="heading_container heading_center">
                <h2>Our Fresh Flower & Gifts</h2>
                <div>
                    <button onclick="sortProducts('title_asc')">Sort by Title (Asc)</button>
                    <button onclick="sortProducts('title_desc')">Sort by Title (Desc)</button>
                    <button onclick="sortProducts('price_asc')">Sort by Price (Asc)</button>
                    <button onclick="sortProducts('price_desc')">Sort by Price (Desc)</button>
                </div>
            </div>

            <div class="row" id="product-list">
                @foreach($product as $product)
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="box">
                        <div class="img-box">
                            <img src="products/{{$product->image}}" alt="">
                        </div>
                        <div class="detail-box">
                            <h6>{{$product->title}}</h6>
                            <h6>Price
                                <span>Rp{{$product->price}}</span>
                            </h6>
                        </div>
                        <div style="padding:15px">
                            <a class="btn btn-danger" href="{{url('product_details',$product->id)}}">Details</a>
                            <a class="btn btn-primary" href="{{url('add_cart',$product->id)}}">Add to Cart</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
    // Ensure CSRF token is set for AJAX requests
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
        }
    });

    // Function to sort products via AJAX
    function sortProducts(sortType) {
        $.ajax({
            url: '{{ route("products.sort") }}', // Ensure this matches your defined route name
            type: 'POST',
            data: { sort: sortType },
            success: function(response) {
                $('#product-list').html(''); // Clear existing product list
                response.products.forEach(product => {
                    $('#product-list').append(`
                        <div class="col-sm-6 col-md-4 col-lg-3">
                            <div class="box">
                                <div class="img-box">
                                    <img src="products/${product.image}" alt="">
                                </div>
                                <div class="detail-box">
                                    <h6>${product.title}</h6>
                                    <h6>Price
                                        <span>Rp${product.price}</span>
                                    </h6>
                                </div>
                                <div style="padding:15px">
                                    <a class="btn btn-danger" href="{{ url('product_details', '') }}/${product.id}">Details</a>
                                    <a class="btn btn-primary" href="{{ url('add_cart', '') }}/${product.id}">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    `);
                });
            },
            error: function(xhr) {
                console.log(xhr.responseText);
            }
        });
    }
</script>

</body>
</html>
