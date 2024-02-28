<x-web.layout>

    <form method="post" action="{{ route('login') }}">
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

</x-web.layout>