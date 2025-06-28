@extends("layouts.default")

@section("style")
<style>
  html, body {
    height: 100%;
  }

  .form-signin {
    max-width: 330px;
    padding: 1rem;
  }

  .form-signin .form-floating:focus-within {
    z-index: 2;
  }

  .form-signin input[type="email"] {
    margin-bottom: -1px;
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0;
  }

  .form-signin input[type="password"] {
    margin-bottom: 10px;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
  }
</style>
@endsection

@section("content")
<main class="form-signin w-100 m-auto">
  <form method="POST" action="{{ route('login.post') }}">
    @csrf
    <img class="mb-4" src="{{ asset('assets/images/bootstrap-logo.svg') }}" alt="Bootstrap logo" width="72" height="57">
    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

    <div class="form-floating">
      <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com" required>
      <label for="floatingInput">Email address</label>
    </div>

    <div class="form-floating">
      <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password" required>
      <label for="floatingPassword">Password</label>
    </div>

    <div class="form-check text-start my-3">
      <input class="form-check-input" type="checkbox" value="remember" name="remember" id="checkDefault">
      <label class="form-check-label" for="checkDefault">Remember me</label>
    </div>

    <button class="btn btn-primary w-100 py-2" type="submit">Sign in</button>
  </form>
</main>
@endsection
