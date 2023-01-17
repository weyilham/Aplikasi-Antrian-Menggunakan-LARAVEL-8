<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Form Login</title>
        <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <script src="/bootstrap/js/bootstrap.bundle.min.js"></script>
    </head>

    <body>
        <div class="vh-100 d-flex justify-content-center align-items-center">
            <div class="col-md-4 p-5 shadow-sm border rounded-5 border-primary">
                <h2 class="text-center mb-4 text-primary">Silahkan Login</h2>
                @if (session()->has('loginError'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('loginError') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
                <form method="post" action="/login">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control bg-info bg-opacity-10 border border-primary @error('email') is-invalid @enderror " name="email" id="email" autofocus value="{{ old('email') }}">
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control bg-info bg-opacity-10 border border-primary @error('password') is-invalid @enderror" name="password" id="password">
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                    </div>
                    <p class="small"><a class="text-primary" href="forget-password.html">Forgot password?</a></p>
                    <div class="d-grid">
                        <button class="btn btn-primary" type="submit">Login</button>
                    </div>
                </form>
                
            </div>
        </div>
    </body>

</html>