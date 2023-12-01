<div class="container">
    <div class="card mb-5">
        <div class="panel">
            <div class="panel-heading">
                <h1 class="text-title mt-3">Furniture Products</h1 >
                <div class="card-body">
                    <table id="table" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Quantity</th>
                                <th>Long (cm)</th>
                                <th>Width (cm)</th>
                                <th>Description</th>
                                <th>Date of Creation</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($produks as $produk)
                                <tr>
                                    <td>{{ $produk['id_produk'] }}</td>
                                    <td>{{ $produk['nama_produk'] }}</td>
                                    <td>{{ $produk['kuantitas'] }}</td>
                                    <td>{{ $produk['panjang'] }}</td>
                                    <td>{{ $produk['lebar'] }}</td>
                                    <td>{{ $produk['deskripsi'] }}</td>
                                    <td>{{ $produk['date_of_creation'] }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>