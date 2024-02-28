<!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="robots" content="noindex,nofollow">
        <title>DEMO</title>
        @vite(['resources/sass/admin/app.scss'])
    </head>
    <body>
        <form method="post" action="{{ route('admin.login') }}">
            @csrf
            <label for="email" class="col-md-4 col-form-label text-white">メールアドレス</label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
            @error('email'){{ $message }}@enderror
            <label for="password" class="col-md-4 col-form-label text-white">パスワード</label>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
            @error('password'){{ $message }}@enderror
            <span class="pe-1"><input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}></span>
            <label class="form-check-label text-white" for="remember">ログインを記憶する</label>
            <button type="submit" class="btn btn-primary w-100 btn-md mb-3">
                ログインする
            </button>
        </form>
    </body>
</html>