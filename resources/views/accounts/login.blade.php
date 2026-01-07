<!doctype html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="https://mm.aldyal.my.id/favicon.ico" type="image/x-icon">
    <title>Login | Dy Pictures</title>

    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">

</head>

<body>

    <div class="container d-flex justify-content-center py-5">
        <div class="auth-card">
            <div class="text-center">
                <img src="https://mm.aldyal.my.id/favicon.ico" alt="Logo" class="logo-img">
                <h4 class="fw-bold mb-1">Selamat Datang Kembali!</h4>
                <p class="text-muted small mb-4">Masuk ke akun Anda sekarang!</p>
            </div>

            @if(session('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif

            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif

            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="form-floating mb-3">
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                        name="email" placeholder="contoh@email.com" value="{{ old('email') }}" required>
                    <label for="email" class="text-muted">Email</label>
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-floating mb-3">
                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="password"
                        name="password" placeholder="Kata Sandi" required>
                    <label for="password" class="text-muted">Kata Sandi</label>
                    @error('password')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="d-grid gap-2">
                    <button class="btn btn-dark" type="submit">Masuk</button>
                </div>
            </form>
            <div class="text-center mt-4">
                <p class="small text-muted">Belum mempunyai akun? <a href="/member/join"
                        class="fw-bold text-dark">Daftar</a> sekarang!</p>
            </div>
        </div>
    </div>

</body>

</html>