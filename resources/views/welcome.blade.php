<x-layouts>
    <h1 class="row justify-content-center m-3">List Menu</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Gambar</th>
                <th>Nama</th>
                <th>Harga</th>
                <th>Estimasi penyajian</th>
                <th>Pesan</th>
            </tr>
        </thead>
        <tbody>
            @foreach($menu as $item)
                <tr>
                    @if($item->makanan_id)
                        <td>
                            @if($item->makanan->gambar)
                                <img src="{{ asset('storage/' . $item->makanan->gambar) }}" alt="{{ $item->makanan->nama }}" class="img-fluid" style="width: 100px;">
                            @else
                                <img src="{{ asset('assets/images/users/2.png') }}" alt="Food" class="img-fluid">
                            @endif
                        </td>
                        <td>{{ $item->makanan->nama }}</td>
                        <td>Rp.{{ $item->harga }}</td>
                        <td>{{ $item->makanan->waktu_penyajian }}</td>
                        <td>
                            <form action="#" method="POST" class="add-to-cart-form">
                                @csrf
                                <input type="hidden" name="menu_id" value="{{ $item->id }}">
                                <button type="submit" class="btn btn-primary add-to-cart-btn">+</button>
                            </form>
                        </td>
                    @elseif($item->minuman_id)
                        <td>
                            @if($item->minuman->gambar)
                                <img src="{{ asset('storage/' . $item->minuman->gambar) }}" alt="{{ $item->minuman->nama }}" class="img-fluid" style="width: 100px;">
                            @else
                                <img src="{{ asset('assets/images/users/agent2.jpg') }}" alt="Drink" class="img-fluid">
                            @endif
                        </td>
                        <td>{{ $item->minuman->nama }}</td>
                        <td>Rp.{{ $item->harga }}</td>
                        <td>{{ $item->minuman->waktu_penyajian }}</td>
                        <td>
                            <form action="#" method="POST" class="add-to-cart-form">
                                @csrf
                                <input type="hidden" name="menu_id" value="{{ $item->id }}">
                                <button type="submit" class="btn btn-primary add-to-cart-btn">+</button>
                            </form>                            
                        </td>                       
                    @endif
                </tr>
            @endforeach
        </tbody>
    </table>   
</x-layouts>
