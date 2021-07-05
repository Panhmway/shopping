<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Shop</title>
    <link rel="stylesheet"
          href="https://demos.creative-tim.com/argon-dashboard/assets/vendor/nucleo/css/nucleo.css">
    <link rel="stylesheet"
          href="https://demos.creative-tim.com/argon-dashboard/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="https://demos.creative-tim.com/argon-dashboard/assets/css/argon.min.css?v=1.2.0">

</head>

<body>

<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <ul class="list-group">
                        <a>
                            <li class="list-group-item bg-primary text-white mb-0 my-2">
                                Admin Management
                            </li>
                        </a>
                        <a href="{{url('/admin')}}" class="my-2">
                            <li class="list-group-item">
                                Dashboard
                            </li>
                        </a>
                        <a class="my-2" href="{{route('admin.category.index')}}">
                            <li class="list-group-item">
                                Category
                            </li>
                        </a>
                        <a class="my-2" href="{{route('admin.product.index')}}">
                            <li class="list-group-item">
                                Product
                            </li>
                        </a>
                        <a class="my-2" href="{{url('admin/order/pending')}}">
                            <li class="list-group-item">
                                Pending Order
                            </li>
                        </a>
                        <a class="my-2" href="{{url('admin/order/complete')}}">
                            <li class="list-group-item">
                                Complete Order
                            </li>
                            <a class="my-2" href="{{url('admin/user')}}">
                                <li class="list-group-item">
                                     User List
                                </li>
                            </a>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    @include('inc.error')
                   @yield('content')
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://demos.creative-tim.com/argon-dashboard/assets/vendor/jquery/dist/jquery.min.js"></script>
<script
    src="https://demos.creative-tim.com/argon-dashboard/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://demos.creative-tim.com/argon-dashboard/assets/js/argon.min.js?v=1.2.0"></script>
</body>

</html>
