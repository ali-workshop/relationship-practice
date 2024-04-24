<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Product</title>
</head>
<body>

<form action='{{route('products.update',['product'=>$product])}}' method='POST'>
    @csrf
    @method('PUT')
    <div>
       
            <input type='text' name='name' placeholder="Name" {{old($product->name)}} >
            <input type='integer' name='quintity' placeholder="quintity" {{old($product->quintity)}} >
            <input type='submit'  value='edit product'>
    </div>

</form>
</body>
</html>