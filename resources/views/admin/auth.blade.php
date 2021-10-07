<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="stylesheet" href="{{ asset("coreui/css/free.min.css") }}">
    <link rel="stylesheet" href="{{ asset('coreui/css/style.css') }}">
    <title>LOGIN</title>
</head>
<body class="c-app flex-row align-items-center">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @include('admin.partials.flashes')
            <div class="card-group">
                <div class="card p-4">
                    <form action="/admin/login" method="POST">
                        @csrf
                        <div class="card-body">
                            <h1>Login</h1>
                            <p class="text-muted">Sign In to your account</p>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <svg class="c-icon">
                                        <use xlink:href="{{ asset('coreui/sprites/free.svg') }}#cil-user"></use>
                                    </svg>
                                </span>
                                </div>
                                <input name="email" class="form-control" type="text" placeholder="Email" value="{{ old('email') }}">
                            </div>
                            <div class="input-group mb-4">
                                <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <svg class="c-icon">
                                        <use xlink:href="{{ asset('coreui/sprites/free.svg') }}#cil-lock-locked"></use>
                                    </svg>
                                </span>
                                </div>
                                <input name="password" class="form-control" type="password" placeholder="Password">
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <button class="btn btn-primary px-4" type="submit">Login</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="card text-white bg-primary py-5 d-md-down-none" style="width:44%">
                    <div class="card-body text-center">
                        <div>
                            <h2>Sign up</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('coreui/js/coreui.bundle.min.js') }}"></script>
<!--<![endif]-->
</body>
</html>
