@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6"> <!-- Mengatur lebar kolom untuk tampilan lebih baik -->
            <div class="login-container">
                <h2>Masuk ke akun Anda</h2>
                <form action="{{ route('login') }}" method="POST">
                    @csrf <!-- Tambahkan CSRF token untuk keamanan -->

                    @if (session('error'))
                        <div class="alert alert-danger" role="alert" aria-live="assertive">
                            {{ session('error') }}
                        </div>
                    @endif

                    <div class="form-group">
                        <label for="email">Alamat Email</label>
                        <input type="email" id="email" name="email" placeholder="Email" value="{{ old('email') }}" required autocomplete="email" autofocus class="@error('email') is-invalid @enderror">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="password">Kata Sandi</label>
                        <div class="password-container">
                            <input type="password" id="password" name="password" placeholder="Password" required autocomplete="current-password" class="@error('password') is-invalid @enderror">
                            <span class="toggle-password" onclick="togglePassword()" role="button" tabindex="0" aria-label="Tampilkan atau sembunyikan kata sandi">👁</span> <!-- Tambahkan fitur toggle -->
                        </div>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="actions">
                        <input type="checkbox" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label for="remember">Ingat saya</label>
                        <a href="{{ route('password.request') }}" class="forgot-password">Lupa kata sandi?</a>
                    </div>

                    <button type="submit" class="login-btn">Masuk</button>
                </form>

                <a href="{{ route('register') }}" class="register-btn">Daftar Tiket.Com</a>
            </div>
        </div>
    </div>
</div>

<script>
    function togglePassword() {
        const passwordInput = document.getElementById('password');
        const toggleIcon = document.querySelector('.toggle-password');

        if (passwordInput.type === "password") {
            passwordInput.type = "text";
            toggleIcon.innerHTML = "🙈"; // Ganti ikon saat password terlihat
        } else {
            passwordInput.type = "password";
            toggleIcon.innerHTML = "👁"; // Ganti ikon saat password tersembunyi
        }
    }
</script>
@endsection
