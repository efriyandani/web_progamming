<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <a method="post" href="{{ route('product.create') }}">Tambah produk</a>\
    <form action="{{ route('product.store') }}">
        <input type="text">
        <input type="text">
        <input type="date">
        <input type="submit" value="Simpan">
    </form>
</body>

</html>
