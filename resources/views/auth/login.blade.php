<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

    <link rel="stylesheet" href="{{ url('bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ url('bootstrap/css/style.css') }}">
</head>
<body class="bg-light" style="font-family: 'Courier New', Courier, monospace">
    <div class="container col-xl-4 mt-5 pt-5">
        <div class="m-auto p-4 element" style="border: 1px solid rgba(0, 0, 0, 0.336); border-radius: 6px;">

            @if (session('error'))
                <div class="alert alert-danger" style="font-size: 14px;">
                    {{ session('error') }}
                </div>
            @endif

            @if (session('success'))
                <div class="alert alert-success" style="font-size: 14px;">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('authenticate') }}" method="post">
                
                {{ csrf_field() }}

                <label for="">Email</label>
                <input type="email" name="email" class="form-control" @required(true)>

                @error('email')
                    <span class="text-danger">{{ $message }}</span>
                @enderror

                <label for="" class="mt-3">Password</label>
                <input type="password" class="form-control" name="password" @required(true)>

                @error('email')
                    <span class="text-danger">{{ $message }}</span>
                @enderror

                <div class="d-grid mt-3">
                    <button class="btn btn-success" type="submit">Login</button>
                </div>

                <div class="mt-3">
                    <span style="font-size: 15px;">Don't have an account? <a href="{{ route('register') }}" class="text-decoration-none">Register</a></span>
                </div>
            </form>
        </div>
    </div>
</body>
</html>