<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>@yield('title', 'Forum')</title>

</head>
<body>
    <h2>@yield('header')</h2>

<ul>
    <li><a href="/">Home</a></li>
</ul>

@yield('content')

</body>
</html>