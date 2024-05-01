<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit A Products</title>
</head>

<body>
    <h1>Edit a Products</h1>
    <div>
        @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
    </div>
    <form method="post" action="{{ route('products.update', ['product' => $product]) }}">
        @csrf
        @method('PUT')
        <div>
            <label>Nama Produk</label>
            <input type="text" name="name" placeholder="Masukan Nama Produk" value="{{ $product->name }}">
        </div>
        <div>
            <label>Jumlah Produk</label>
            <input type="text" name="qty" placeholder="Masukan Jumlah" value="{{ $product->qty }}">
        </div>
        <div>
            <label>Harga Produk</label>
            <input type="text" name="price" placeholder="Masukan Harga" value="{{ $product->price }}">
        </div>
        <div>
            <label>Description</label>
            <input type="text" name="description" placeholder="Masukan Description"
                value="{{ $product->description }}">
        </div>

        <div>
            <button type="submit">Edit</button>
        </div>
    </form>
</body>

</html>
