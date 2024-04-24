<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create product</title>
</head>
<body>

<form action='{{route('products.store')}}' method='post'>
    @csrf
    <div>
            

        
            <input type='text' name='name' placeholder="Name" required>
            <input type='interger' name='quintity' placeholder="Quintity" required>
            
            <select name='category_id'> 
                <option>Select Category</option>
            @foreach ($categories as $category)
            <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
            </select>
        
            <input type='submit'  value='Add product'>
    </div>

</form>
</body>
</html>