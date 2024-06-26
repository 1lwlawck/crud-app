<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create A Produk</title>
</head>

<body>
    <h1>Create a Products</h1>
    <div>
        @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
    </div>
    <form method="post" action="{{ route('products.store') }}">
        @csrf
        @method('POST')
        <div>
            <label>Nama Produk</label>
            <input type="text" name="name" placeholder="Masukan Nama Produk">
        </div>
        <div>
            <label>Jumlah Produk</label>
            <input type="text" name="qty" placeholder="Masukan Jumlah">
        </div>
        <div>
            <label>Harga Produk</label>
            <input type="text" name="price" placeholder="Masukan Harga">
        </div>
        <div>
            <label>Description</label>
            <input type="text" name="description" placeholder="Masukan Description">
        </div>

        <div>
            <button type="submit">Submit</button>
        </div>
    </form>
</body>

</html>
