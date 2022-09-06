<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Untitled</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>

<body>
    <div class="login-clean">
        <form method="post" action="{{ route('login') }}">
          @csrf
            <h2 class="sr-only">Login Form</h2>
            <div class="illustration">
              <img src="{{asset('backend/plugins/images/logo.png')}}" width="200" alt="homepage" />
            </div>
            <div class="form-group">
              <input id="email" class="form-control @error('email') is-invalid @enderror" type="email" name="email" placeholder="Email" value="{{ old('email') }}" required autocomplete="email" autofocus>
              @error('email')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
            <div class="form-group">
              <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" required autocomplete="current-password" placeholder="Password">
              @error('password')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
            <div class="form-group">
              <button class="btn btn-primary btn-block" type="submit">Se connecter</button>
              @if (Route::has('password.request'))
                  <a class="btn btn-link" href="{{ route('password.request') }}">
                      {{ __('Mot de passe oublié?') }}
                  </a>
              @endif
            </div>
          </form>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
</body>

</html>
