<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prouct</title>



</head>
<body>
    <a href='{{route('products.create')}}'> Add new Product</a>
    <table>
        <tr>
          <th>ProductName</th>
          <th>ProductQuantity</th>
          <th>Productavailablity</th>
          <th>ProductCategory</th>
          <th> edit</th>
          <th> delete</th>
          <edit>
        </tr>
            @foreach ($products as $product )
            <tr>
            <td>{{$product->name}}</td> 
            <td>{{$product->quintity}}</td>  
            <td>
        @if ($product->avaliable)
        Avaliable
        @else
        UnAvaliable
        @endif
            </td>  
            <td>{{$product->category->name}}</td>  
            <td><a href='{{route('products.edit',['product'=>$product])}}' >edit</a> </td>
            <td>
            <form action='{{route('products.destroy',['product'=>$product])}}' method='post'>
                @csrf
                @method('DELETE')
                <input type='submit' value ='Delete' >
            </form>    
            
            </td>          
            </tr>
            @endforeach
          
        </table>
</body>
</html>