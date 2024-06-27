<!DOCTYPE html>
<html>

<head>

  @include('home.css')
      
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    @include('home.header') 
    <!-- end header section -->
    <!-- slider section -->
 
   @include('home.slider')

    <!-- end slider section -->
  </div>
  <!-- end hero area -->

  <!-- shop section -->

  @include('home.product')

  <!-- end shop section -->

  @include('home.about')

  <!-- info section -->
@include('home.footer')

</body>

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

</html>