<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Fresh Flower & Gifts</title>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@400;700&display=swap" rel="stylesheet">
    <style>
        /* Mengatur font */
        body {
            font-family: 'Libre Baskerville', serif;
        }

        /* Buat atur kontainer box produk */
        .shop_section .box {
            background-color: #ffc3c3;
            position: relative;
            padding: 10px;
            margin-top: 25px;
        }

        /* Warna huruf tombol kontainer */
        .shop_section .box a {
            color: #ffffff;
        }

        /* Mengubah warna tombol Add to Cart */
        .btn-primary {
            background-color: #db4f66; /* Warna latar belakang */
            border-color: #f1dfee; /* Warna border */
            color: #ffffff; /* Warna teks */
        }

        .btn-primary:hover {
            background-color: transparent;
            color: #ffffff;
        }

        .btn-primary:active {
            background-color: #faa5b3; /* Warna latar belakang saat tombol ditekan */
            border-color: #ffc0cb; /* Warna border saat tombol ditekan */
            color: #fff; /* Warna teks saat tombol ditekan */
        }

        /* Warna tombol Detail */
        .btn-primary,
        .btn-danger {
            background-color: #db4f66; /* Warna latar belakang */
            border-color: #f1dfee; /* Warna border */
            color: #ffffff; /* Warna teks */
        }

        .btn-primary:hover,
        .btn-danger:hover {
            background-color: transparent;
            color: #ffffff;
        }

        .btn-primary:active,
        .btn-danger:active {
            background-color: #ffc0cb; /* Warna latar belakang saat tombol ditekan */
            border-color: #ffc0cb; /* Warna border saat tombol ditekan */
            color: #fff; /* Warna teks saat tombol ditekan */
        }

        /* Mengatur gambar dalam kontainer img-box */
        .shop_section .box .img-box {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 15px 30px;
            height: 245px;
        }

        .shop_section .box .img-box img {
            max-width: 100%;
            max-height: 145px;
        }

        /* Mengatur detail box */
        .shop_section .box .detail-box {
            display: flex;
            justify-content: space-between;
        }

        .shop_section .box .detail-box h6 span {
            color: #db4f66;
        }

        .shop_section .box .detail-box h6 {
            font-size: 1.1rem; /* Perbesar ukuran font judul */
        }
    </style>
</head>
<body>
    <section class="shop_section layout_padding">
        <div class="container">
            <div class="heading_container heading_center">
                <h2>Our Fresh Flower & Gifts</h2>
            </div>
            <div class="row">
                @foreach($product as $products)
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="box">
                        <div class="img-box">
                            <img src="products/{{$products->image}}" alt="">
                        </div>
                        <div class="detail-box">
                            <h6>{{$products->title}}</h6>
                            <h6>Price
                                <span>Rp{{$products->price}}</span>
                            </h6>
                        </div>
                        <div style="padding:15px">
                            <a class="btn btn-danger" href="{{url('product_details',$products->id)}}">Details</a>
                            <a class="btn btn-primary" href="{{url('add_cart',$products->id)}}">Add to Cart</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
</body>

</html>
