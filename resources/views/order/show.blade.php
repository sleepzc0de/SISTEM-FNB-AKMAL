<x-layouts-user>
    <h1 class="row justify-content-center m-3">Order Anda</h1>

    @if ($order)
        <table class="table">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Jumlah</th>
                    <th>Subtotal</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($orderDetails as $detail)
                    <tr data-id="{{ $detail->id }}">
                        <td>{{ $detail->menu->nama }}</td>
                        <td>
                            <button type="button" class="btn btn-secondary decrease-quantity">-</button>
                            <span class="quantity">{{ $detail->jumlah }}</span>
                            <button type="button" class="btn btn-secondary increase-quantity">+</button>
                        </td>
                        <td class="subtotal">Rp. {{ $detail->subtotal }}</td>
                        <td>
                            <form action="#" method="POST" class="update-order-detail-form" style="display: none;">
                                @csrf
                                <input type="hidden" name="order_detail_id" value="{{ $detail->id }}">
                                <input type="hidden" name="action" value="">
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="2">Total</td>
                    <td colspan="2" class="total">Rp. {{ $orderDetails->sum('subtotal') }}</td>
                </tr>
            </tfoot>
        </table>
        <form action="#" method="POST">
            @csrf
            <button type="submit" class="btn btn-success">Konfirmasi Order</button>
        </form>
    @else
        <p>Anda belum memesan apapun.</p>
    @endif

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.increase-quantity, .decrease-quantity').on('click', function() {
                var form = $(this).closest('tr').find('.update-order-detail-form');
                var action = $(this).hasClass('increase-quantity') ? 'increase' : 'decrease';
                form.find('input[name="action"]').val(action);

                $.ajax({
                    url: form.attr('action'),
                    method: "POST",
                    data: form.serialize(),
                    success: function(response) {
                        var row = form.closest('tr');
                        var quantity = parseInt(row.find('.quantity').text());
                        quantity = action === 'increase' ? quantity + 1 : quantity - 1;
                        row.find('.quantity').text(quantity);
                        row.find('.subtotal').text('Rp. ' + response.subtotal);

                        var total = 0;
                        $('.subtotal').each(function() {
                            total += parseInt($(this).text().replace('Rp. ', ''));
                        });
                        $('.total').text('Rp. ' + total);
                    },
                    error: function(xhr) {
                        alert('Terjadi kesalahan, coba lagi.');
                    }
                });
            });
        });
    </script>
</x-layouts-user>
