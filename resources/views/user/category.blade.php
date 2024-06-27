<x-layouts-user>
    <h1 class="row justify-content-center m-3">Category Menu</h1>
    <table class="table p-5">
        <thead>
            <tr>
                <th>Jenis Category</th>              
            </tr>
        </thead>
        <tbody>
            @foreach($category as $item)
                <tr>
                    <td>{{ $item->category_name }}</td>                  
                </tr>
            @endforeach
        </tbody>
    </table>
</x-layouts-user>