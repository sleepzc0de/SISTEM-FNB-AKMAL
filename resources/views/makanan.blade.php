<x-layouts>
    <h1 class="row justify-content-center m-3">Menu Makanan</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Gambar</th>
                <th>Nama</th>
                <th>Estimasi penyajian</th>
                <th>Harga</th>
                <th>Kategori</th>
                <th>Pesan</th>
            </tr>
        </thead>
        <tbody>
            @foreach($makanan as $item)
                <tr>
                    <td>
                        @if($item->gambar)
                            <img src="{{ asset('storage/' . $item->gambar) }}" alt="{{ $item->nama }}" class="img-fluid" style="width: 100px;">
                        @else
                            <img src="{{ asset('assets/images/users/2.png') }}" alt="Food" class="img-fluid">
                        @endif
                    </td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->waktu_penyajian }}</td>
                    <td>Rp. {{ $item->price }}</td>
                    <td>{{ $item->category->category_name }}</td>
                    <td>
                        <form action="#" method="POST" class="add-to-cart-form">
                            @csrf
                            <input type="hidden" name="makanan_id" value="{{ $item->id }}">
                            <button type="submit" class="btn btn-primary add-to-cart-btn">+</i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-layouts>
