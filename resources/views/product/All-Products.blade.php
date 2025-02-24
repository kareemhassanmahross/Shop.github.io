<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Product Table</title>
    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">MyStore</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Products</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container mt-4">

        <h2 class="text-center mb-4">Product List</h2>
        <div class="my-2">
            <form action="{{route('Add-Product')}}" method="get">
                <input type="submit" class="btn btn-dark" value="Add Product">
            </form> 
        </div>
        <div class="table-responsive">
            <table class="table table-bordered table-hover text-center">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Rate</th>
                        <th colspan="3">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ( $products as $pro )
                    <tr>
                        <td class="py-4">{{$pro->id}}</td>
                        <td class="py-4">{{$pro->name}}</td>
                        <td class="py-4">{{$pro->desc}}</td>
                        <td class="py-4">{{$pro->quantity}}</td>
                        <td class="py-4">{{$pro->price}}</td>
                        <td class="py-4">{{$pro->rate}}</td>
                        <td>
                            <div class="my-2">
                                <form action="" method="get">
                                    <input type="submit" class="btn btn-dark" value="Updata">
                                </form> 
                            </div>
                        </td>
                        <td>
                            <div class="my-2">
                                <form action="" method="get">
                                    <input type="submit" class="btn btn-dark" value="Delete">
                                </form> 
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {{ $products->links() }}
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3 mt-5">
        <p class="mb-0">© 2025 MyStore. All rights reserved.</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Toastr JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script >
        @if(Session::has('success'))
                toastr.success("{{ Session::get('success') }}");
            @endif

            @if(Session::has('error'))
                toastr.error("{{ Session::get('error') }}");
            @endif

            @if(Session::has('info'))
                toastr.info("{{ Session::get('info') }}");
            @endif

            @if(Session::has('warning'))
                toastr.warning("{{ Session::get('warning') }}");
            @endif

                toastr.options = {
            "closeButton": true,
            "progressBar": true,
            "positionClass": "toast-top-right",
            "timeOut": "5000"
        };
    </script>
</body>
</html>
