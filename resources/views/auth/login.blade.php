@extends("layouts.auth")

@section("style")
<style>
  html, body {
    height: 100%;
  }

  .form-signin {
    max-width: 330px;
    padding: 1rem;
    margin: auto;
  }

  .form-signin .form-floating:focus-within {
    z-index: 2;
  }

  .form-signin input {
    margin-bottom: 10px;
  }

  .text-danger {
    font-size: 0.875em;
    margin-top: -8px;
    margin-bottom: 8px;
    display: block;
  }
</style>
@endsection

@section("content")
<main class="form-signin">
  <form method="POST" action="{{ route('login.post') }}">
    @csrf

    <img class="mb-4" src="{{ asset('assets/img/ToDo.jpeg') }}" alt="ToDo Logo" width="100" height="100">
    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

    {{-- ✅ Show registration success message --}}
    @if (session('success'))
      <div class="alert alert-success mb-3">{{ session('success') }}</div>
    @endif

    {{-- ✅ Show validation or login errors --}}
    @if ($errors->any())
      <div class="alert alert-danger mb-3">
        @foreach ($errors->all() as $error)
          <div>{{ $error }}</div>
        @endforeach
      </div>
    @endif

    {{-- ✅ Email --}}
    <div class="form-floating">
      <input name="email" type="email" class="form-control" id="floatingInput" placeholder="name@example.com" value="{{ old('email') }}" required>
      <label for="floatingInput">Email address</label>
      @error('email')
        <span class="text-danger">{{ $message }}</span>
      @enderror
    </div>

    {{-- ✅ Password --}}
    <div class="form-floating">
      <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password" required>
      <label for="floatingPassword">Password</label>
      @error('password')
        <span class="text-danger">{{ $message }}</span>
      @enderror
    </div>

    {{-- ✅ Remember me --}}
    <div class="form-check text-start my-3">
      <input class="form-check-input" type="checkbox" value="remember" name="remember" id="checkDefault">
      <label class="form-check-label" for="checkDefault">Remember me</label>
    </div>

    <button class="btn btn-primary w-100 py-2" type="submit">Sign in</button>

    <div class="text-center mt-3">
      Don’t have an account? <a href="{{ route('register') }}">Register here</a>
    </div>
  </form>
</main>
@endsection
