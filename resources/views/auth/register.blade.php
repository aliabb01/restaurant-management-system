@extends('layouts.app')

@section('content')

<style>
    body {
        background-image: url("images/login.jpg");
    }

    .btn:focus {
        outline: none;
        box-shadow: none;
    }

    .reg-container {
        margin-top: 175px;
        margin-bottom: 200px;
    }

    .card {
        -webkit-box-shadow: 0px 0px 20px 5px rgba(41, 41, 41, 1);
        -moz-box-shadow: 0px 0px 20px 5px rgba(41, 41, 41, 1);
        box-shadow: 0px 0px 20px 5px rgba(41, 41, 41, 1);
    }

    .card-header {
        background-color: var(--primary-red);
    }

    #name {
        border-radius: 25px;
    }

    #email {
        border-radius: 25px;
    }

    #password {
        border-radius: 25px;
    }

    #password-confirm {
        border-radius: 25px;
    }

    .eye-icon {
        border-radius: 25px;
        -webkit-touch-callout: none;
        -webkit-user-select: none;
        -khtml-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    .eye-icon:hover {
        cursor: pointer;
    }

    .btn-collapse-google {
        background-color: var(--laravel-red);
        border-radius: 25px;
        margin-left: 47%;
    }

    .btn-collapse-google:hover {
        color: yellowgreen !important;
    }

    .fa-google {
        background: conic-gradient(from -45deg, #ea4335 110deg, #4285f4 90deg 180deg, #34a853 180deg 270deg, #fbbc05 270deg) 73% 55%/150% 150% no-repeat;
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
        -webkit-text-fill-color: transparent;
    }

    .ggl {
        border: 1px solid grey;
    }
</style>

<div class="container reg-container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border-0">
                <div class="card-header text-center text-white pt-3 pb-3">
                    <h4>Register</h4>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Name : </label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                    name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail Address : </label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Password : </label>

                            <div class="col-md-6">
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="input-group-prepend">
                                <span class="input-group-text eye-icon" id="toggle-password"
                                    title="Press to show/hide the password">👁</span>
                            </div>

                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirm Password
                                : </label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control"
                                    name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>

                        <button class="btn btn-collapse-google mt-4 text-white" type="button" data-toggle="collapse"
                            data-target="#googleCollapse" aria-expanded="false" aria-controls="googleCollapse">
                            <i class="fas fa-chevron-down"></i>
                        </button>

                    </form>
                </div>

                <div class="collapse" id="googleCollapse">
                    <div class="card-footer">
                        <div class="form-group text-left">
                            <div class="col-md-8 offset-md-4">
                                <a href="{{ url('auth/google') }}" class="btn btn-light btn-lg text-primary ggl">
                                    <span class="fab fa-google"></span>
                                    <!--<i class="fab fa-github ico-git" style="font-size:36px"></i> --> Sign up
                                    using
                                    Google
                                </a>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>

<script>
    const passwordInput = document.getElementById('password');
    const passwordConfirmInput = document.getElementById('password-confirm');
    const togglePasswordButton = document.getElementById('toggle-password');

    togglePasswordButton.addEventListener('click', togglePassword);

function togglePassword() {
  if (passwordInput.type === 'password') {
    passwordInput.type = 'text';
    passwordConfirmInput.type = 'text';
    togglePasswordButton.textContent = '👁';
    togglePasswordButton.setAttribute('aria-label',
      'Hide password.');
  } else {
    passwordInput.type = 'password';
    passwordConfirmInput.type = 'password';
    togglePasswordButton.textContent = '👁';
    togglePasswordButton.setAttribute('aria-label',
      'Show password as plain text. ' +
      'Warning: this will display your password on the screen.');
  }
}

</script>

@endsection