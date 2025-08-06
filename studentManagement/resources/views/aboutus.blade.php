<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>About Us</h1>
    <h2>Name: {{ $name }}</h2>
    <h2>ID: {{ $id }}</h2>

    {{-- @include('SubViews.Input', ['myName' => 'this is my name']) --}}
    @include('SubViews.Input', ['myName' => $name])
</body>

</html>