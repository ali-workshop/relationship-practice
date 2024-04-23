<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Category</title>



</head>
<body>
    <a href='{{route('categories.create')}}'> Add new Category</a>
    <table>
        <tr>
          <th>CategoryName</th>
          <th> edit</th>
          <th> delete</th>
          <edit>
        </tr>
            @foreach ($categories as $category )
            <tr>
            <td>{{$category->name}}</td>  
            <td><a href='{{route('categories.edit',['category'=>$category])}}' >edit</a> </td>
            <td>
            <form action='{{route('categories.destroy',['category'=>$category])}}' method='post'>
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