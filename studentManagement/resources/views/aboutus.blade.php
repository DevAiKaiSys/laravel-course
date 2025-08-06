<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    {{--
    this is a comment
    this is a second comment
    --}}

    <!-- This is a HTML comment -->
    <h1>About Us</h1>
    <h2>Name: {{ $name }}</h2>
    <h2>ID: {{ $id }}</h2>

    @for($i=0; $i < 10; $i++)
        <p>Item {{ $i }}</p>

        @if($i == 5)
            <h1>Hi this is {{ $i }}</h1>
        @endif
    @endfor
</body>

</html>