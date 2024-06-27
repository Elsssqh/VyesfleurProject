<!DOCTYPE html>
<html>
<head>
    @include('admin.css')

    <style type="text/css">
        table {
            border: 2px solid palevioletred;
            text-align: center;
        }

        th {
            background-color: palevioletred;
            padding: 10px;
            font-size: 18px;
            font-weight: bold;
            text-align: center;
            color: white;
        }

        td {
            color: white;
            padding: 10px;
            border: 1px solid palevioletred;
        }

        .table_center {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .btn-primary,
        .search-button {
            background-color: palevioletred !important; /* warna untuk tombol "On the way" dan "Search" */
            color: white; /* warna teks */
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 10px; 

        }

        .btn-success {
            background-color: palevioletred !important; /* warna untuk tombol "Delivered" */
            color: white; /* warna teks */
        }

        .btn-secondary {
            background-color: palevioletred !important; /* warna untuk tombol "Delivered" */
            color: white; /* warna teks */
        }

        /* Efek hover */
        .btn-primary:hover,
        .btn-secondary:hover,
        .btn-success:hover,
        .search-button:hover {
            opacity: 0.8; /* misalnya, mengurangi opacity saat dihover */
        }

        /* Style untuk form pencarian */
        input[type='search'] {
            width: 300px;
            height: 40px;
            margin-right: 10px;
            padding: 5px;
            font-size: 16px;
        }

        .search-form {
            display: flex;
            justify-content: flex-end;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

@include('admin.header')
@include('admin.sidebar')

<div class="page-content">
    <div class="page-header">
        <div class="container-fluid">
            <h3>All Orders</h3>

            <!-- Form pencarian -->
            <form class="search-form" action="{{ route('admin.orders.search') }}" method="GET">
                @csrf
                <input type="search" name="search" placeholder="Search by customer name">
                <button type="submit" class="search-button">Search</button>
            </form>

            <div class="table_center">
                <table>
                    <tr>
                        <th>Customer name</th>
                        <th>Address</th>
                        <th>Phone</th>
                        <th>Product title</th>
                        <th>Price</th>
                        <th>Image</th>
                        <th>Payment Status</th>
                        <th>Status</th>
                        <th>Change Status</th>
                        <th>Print PDF</th>
                    </tr>

                    @foreach($data as $order)
                    <tr>
                        <td>{{ $order->name }}</td>
                        <td>{{ $order->rec_address }}</td>
                        <td>{{ $order->phone }}</td>
                        <td>{{ $order->product->title }}</td>
                        <td>Rp {{ $order->product->price }}</td>
                        <td>
                            @if($order->product->image)
                                <img width="150" src="{{ asset('products/' . $order->product->image) }}">
                            @else
                                No Image
                            @endif
                        </td>
                        <td>{{ $order->payment_status }}</td>
                        <td>
                            @if($order->status == 'in progress')
                                <span style="color:red">{{ $order->status }}</span>
                            @elseif($order->status == 'On the way')
                                <span style="color:skyblue;">{{ $order->status }}</span>
                            @else
                                <span style="color:yellow;">{{ $order->status }}</span>
                            @endif
                        </td>
                        <td>
                            <a class="btn btn-primary" href="{{ url('on_the_way', $order->id) }}">On the way</a>
                            <a class="btn btn-success" href="{{ url('delivered', $order->id) }}">Delivered</a>
                        </td>
                        <td>
                            <a class="btn btn-secondary" href="{{ url('print_pdf', $order->id) }}">Print PDF</a>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>

@include('admin.js')

</body>
</html>
