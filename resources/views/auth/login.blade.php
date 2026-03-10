<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <h3 class="text-center mb-4">MASUK</h3>
            
            @if(session('error'))
                <div class="alert alert-danger py-2" style="font-size: 0.9rem;">{{ session('error') }}</div>
            @endif

            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" placeholder="nama@email.com" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="********" required>
                </div>
                <button type="submit" class="btn btn-dark w-100">Login</button>
            </form>

            <div class="text-center mt-3">
                <small class="text-muted">Belum punya akun? <a href="{{ route('register') }}" class="text-decoration-none">Daftar</a></small>
            </div>
        </div>
    </div>
</div>

</body>
</html>