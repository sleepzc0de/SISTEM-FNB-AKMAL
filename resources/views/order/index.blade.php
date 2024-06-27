<x-layouts-user>
    <h1 class="row justify-content-center m-3">Order Anda</h1>

    <div class="container">
        <h1>Daftar Pesanan</h1>
        <ul>
            @foreach($orders as $order)
                <li><a href="#">Pesanan #{{ $order->id }}</a></li>
            @endforeach
        </ul>
    </div>
</x-layouts-user>
