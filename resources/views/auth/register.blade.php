<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ URL::asset('css/auth.css/signup.css') }}">
    <title>Sign Up</title>
</head>

<body>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="container">
            <h4>Create new account <span>.</span></h4>
            <div class="wrapper">
                <!-- Name -->
                <div class="wrapp">
                    {{-- <label for="name">Name</label> --}}
                    {{-- <br> --}}
                    <input id="name" class="" type="text" name="name" value="{{ old('name') }}"
                        required autofocus autocomplete="name" placeholder="Name">
                    @if ($errors->has('name'))
                        <p class="">{{ $errors->first('name') }}</p>
                    @endif

                </div>

                <!-- Email Address -->
                <div class="wrapp">
                    {{-- <label for="email">Email</label> --}}
                    {{-- <br> --}}
                    <input id="email" class="" type="email" name="email" value="{{ old('email') }}"
                        required placeholder="Email">
                    @if ($errors->has('email'))
                        <p class="">{{ $errors->first('email') }}</p>
                    @endif

                </div>

                <!-- Phone -->
                <div class="wrapp">
                    {{-- <label for="phone">Phone</label> --}}
                    {{-- <br> --}}
                    <input id="phone" class="" type="number" name="phone" value="{{ old('phone') }}"
                        required placeholder="Phone">
                    @if ($errors->has('phone'))
                        <p class="">{{ $errors->first('phone') }}</p>
                    @endif

                </div>


                <!-- Password -->
                <div class="wrapp">
                    {{-- <label for="password">Password</label> --}}
                    {{-- <br> --}}
                    <input id="password" class="" type="password" name="password" value="{{ old('password') }}"
                        required placeholder="Password">
                    @if ($errors->has('password'))
                        <p class="">{{ $errors->first('password') }}</p>
                    @endif

                </div>

                <!-- Confirm Password -->
                <div class="wrapp">
                    {{-- <label for="password_confirmation">Confirm Password</label> --}}
                    {{-- <br> --}}
                    <input id="password_confirmation" class="" type="password" name="password_confirmation"
                        required autocomplete="new-password" placeholder="Confirm Password">
                    @if ($errors->has('password_confirmation'))
                        <p class="">{{ $errors->first('password_confirmation') }}</p>
                    @endif
                </div>

                <div>
                    <button class="btn-signup">
                        {{ __('Sign Up') }}
                    </button>
                    <br>
                    <a href="{{ route('login') }}" class="btn-signin">
                        Already have an account?
                        <span>
                            {{ __(' Sign In') }}
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </form>

</body>

</html>
