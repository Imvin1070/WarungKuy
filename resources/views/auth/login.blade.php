<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="{{ URL::asset('css/auth.css/signin.css') }}">
    <title>Sign in</title>
</head>

<body>
    <div>
        <?php echo e(session('status')); ?>
    </div>

    <form method="POST" action="{{ route('login') }}">
        <a href="/">
            <i class="fas fa-arrow-left fa-lg"></i>
        </a>
        @csrf
        <div class="container">
            <h4>Sign in</h4>
            <div class="wrapper">
                <div class="wrapp">
                    <input id="email" type="email" name="email" value="{{ old('email') }}" required
                        placeholder="username">
                    @if ($errors->has('email'))
                        <p>{{ $errors->first('email') }}</p>
                    @endif

                </div>



                <div class="wrapp">
                    {{-- <label for="password">Password</label> --}}
                    {{-- <br> --}}
                    <input id="password" type="password" name="password" value="{{ old('password') }}" required
                        placeholder="current-password">
                    @if ($errors->has('password'))
                        <p class="">{{ $errors->first('password') }}</p>
                    @endif

                </div>

                <!-- Remember Me -->
                <div>
                    <label for="remember_me">
                        <input id="remember_me" type="checkbox"
                            class="checkbox"
                            name="remember">
                        <span>{{ __('Remember me') }}</span>
                    </label>
                </div>

                <div class="wrap-btn">
                    <button class="btn-signin">
                        {{ __('Sign in') }}
                    </button>
                    <br>
                    @if (Route::has('password.request'))
                        <a class="btn-forgot"
                            href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif

                    <div>
                        @if (Route::has('register'))
                            <a class="btn-signup"
                                href="{{ route('register') }}">
                                {{ __("Don't have an account yet?") }}
                            </a>
                        @endif

                    </div>
    </form>

    </div>
    </div>
</body>

</html>
