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
<h1>Customer</h1>

<br>
<a href="{{route('index')}}">HOME</a>
<a href="{{route('item')}}">ITEM</a>
<a href="{{route('customer')}}">CUSTOMER</a>
<a href="{{route('order')}}">ORDER</a>
<a href="{{route('order_details')}}">ORDER DETAILS</a>

<br><br>
    ID<br> <input type="text" value="<?php echo $customer_id ?>" disabled ><br><br>
    NAME<br> <input type="text" value="<?php echo $name ?>" disabled ><br><br>
    ADDRESS <br><input type="text" value="<?php echo $address ?>" disabled ><br><br>
</body>

</html>