@extends('layouts.main')

@section('title')
Login
@endsection

@section('style')
<style>
.login-wrapper {
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    background: linear-gradient(135deg, #f0f9ff 0%, #e0f2fe 100%);
}

.login-card {
    background: white;
    padding: 40px;
    width: 100%;
    max-width: 420px;
    border-radius: 16px;
    box-shadow: 0 20px 40px rgba(0,0,0,0.1);
    animation: fadeUp 0.6s ease;
}

.login-card h2 {
    text-align: center;
    margin-bottom: 25px;
    color: #1e293b;
}

.login-card input {
    width: 100%;
    padding: 14px;
    margin-bottom: 15px;
    border-radius: 8px;
    border: 1px solid #ddd;
    font-size: 15px;
}

.login-card input:focus {
    outline: none;
    border-color: #2563eb;
}

.login-card button {
    width: 100%;
    padding: 14px;
    background: #2563eb;
    border: none;
    color: white;
    font-size: 16px;
    border-radius: 8px;
    cursor: pointer;
    font-weight: bold;
    box-shadow: 0 8px 20px rgba(37,99,235,0.3);
}

.login-card button:hover {
    background: #1e40af;
}

.login-footer {
    text-align: center;
    margin-top: 20px;
    font-size: 14px;
}

.login-footer a {
    color: #2563eb;
    text-decoration: none;
    font-weight: 600;
}

@keyframes fadeUp {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}
</style>
@endsection

@section('content')
<div class="login-wrapper">
    <div class="login-card">
        <h2>Login</h2>

        {{-- ERROR LOGIN --}}
        @if(session('error'))
            <p style="color:red; text-align:center; margin-bottom:15px;">
                {{ session('error') }}
            </p>
        @endif

        {{-- SUCCESS --}}
        @if(session('success'))
            <p style="color:green; text-align:center; margin-bottom:15px;">
                {{ session('success') }}
            </p>
        @endif

        <form method="POST" action="/login">
            @csrf

            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>

            <button type="submit">Masuk</button>
        </form>

        <div class="login-footer">
            <a href="/">← Kembali ke Portofolio</a>
        </div>
    </div>
</div>
@endsection
