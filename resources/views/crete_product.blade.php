<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Product</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
    <input type="text" name="name" id="" placeholder="Name">
    <br>
    <input type="text" name="description" id="" placeholder="Description">
    <br>
    <input type="number" name="price" id="" placeholder="Price">
    <br>
    <input type="number" name="stock" id="" placeholder="Stock">
    <br>
    <input type="file" name="image">
    <br>
    <button type="submit">Submit Data</button>
    @foreach ($products as $product)
<p>Name: {{$product->name}}</p>
<p>Description: {{$product->description}}</p>
<p>Rp {{$product->price}}</p>
<p>Stock: {{$product->stock}}</p>
<img src="{{url('storage/' . $product->image) }}" alt=""
height="100px">
@endforeach

</form>
</body>
</html>