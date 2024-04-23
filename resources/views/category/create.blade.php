<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Category</title>
</head>
<body>

<form action='{{route('categories.store')}}' method='post'>
    @csrf
    <div>
       
            <input type='text' name='name' placeholder="Name" required>
            <input type='submit'  value='Add Category'>
    </div>

</form>
</body>
</html>