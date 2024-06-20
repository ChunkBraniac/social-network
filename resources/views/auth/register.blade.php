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
            <form action="{{ route('create_account') }}" method="post">
                {{ csrf_field() }}
                <label for="">Username</label>
                <input type="text" class="form-control" name="name" @required(true)>

                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror

                <label for="" class="mt-3">Email</label>
                <input type="email" name="email" class="form-control" value="{{ old('email') }}" @required(true)>

                @error('email')
                    <span class="text-danger">{{ $message }}</span>
                @enderror

                <label for="" class="mt-3">Password</label>
                <input type="password" class="form-control" name="password" @required(true)>

                @error('password')
                    <span class="text-danger">{{ $message }}</span>
                @enderror

                <div class="d-grid mt-3">
                    <button class="btn btn-success" type="submit">Register</button>
                </div>

                <div class="mt-2">
                    <span style="font-size: 15px;">Already have an account? <a href="{{ route('login') }}" class="text-decoration-none">Login</a></span>
                </div>
            </form>
        </div>
    </div>
</body>
</html>