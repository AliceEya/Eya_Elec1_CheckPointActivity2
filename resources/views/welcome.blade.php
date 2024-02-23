<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

</head>

<body class="antialiased">

<h1>Check Point Activity 2</h1>

<br>
<a href="{{route('index')}}">HOME</a>
<a href="{{route('item')}}">ITEM</a>
<a href="{{route('customer')}}">CUSTOMER</a>
<a href="{{route('order')}}">ORDER</a>
<a href="{{route('order_details')}}">ORDER DETAILS</a>


</body>

</html>