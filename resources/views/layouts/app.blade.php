<!DOCTYPE html>
<html>
<head>
    <title>Shopping App</title>
</head>
<body>
    <nav>
        <a href="{{ route('products.index') }}">Products</a> |
        <a href="{{ route('products.create') }}">Create Product</a> |
        <a href="{{ route('cart.index') }}">Cart</a>
    </nav>
    <hr>
    @yield('content')
</body>
</html>
