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
          <th>Category Name</th>
          <th>Category edit</th>
    
          <edit>
        </tr>
            @foreach ($categories as $category )
            <tr>
            <td>{{$category->name}}</td>  
            <td>{{route('categories.edit',['category'=>$category])}}</td>       
            </tr>
            @endforeach
          
        </table>
</body>
</html>