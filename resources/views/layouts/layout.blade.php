<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css"/>
    <title>Stock App</title>
</head>

<body>
    <div class="container mt-3">
        <nav class="navbar navbar-dark bg-dark text-light p-3 m-auto justify-content-start">
            <a class="navbar-brand" href="/products">Stock App</a>          
            <a class="nav-link m-3" href="/products">Products</a>
            <a class="nav-link m-3" href="/addproduct">Add Product</a>
            <a class="nav-link m-3" href="#">About</a>
        </nav>
        @yield("content")
    </div>
</body>

</html>