<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ URL::asset('css/auth.css/forgot.css') }}">
    <title>Forgot Password</title>
</head>
<body>
    <div>
        <?php echo e(session('status')); ?>
    </div>
    <form method="POST" action="{{ route('password.email') }}">
        <a href="/login">
            <i class="fas fa-arrow-left fa-lg"></i>
        </a>
        @csrf
        <div class="container">
            <p>
                {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
            </p>
            <div class="wrapper">
                <div class="wrapp">
                    <label for="email">
                        <input id="email" type="email" name="email" value="{{ old('email') }}" required
                            autofocus>
                        @if ($errors->has('email'))
                            <p class="">{{ $errors->first('email') }}</p>
                    </label>
                    @endif
                </div>
                <div>
                    <button class="btn-resetpw">
                        {{ __('Email Password Reset Link') }}
                    </button>
                </div>
    </form>
    </div>
    </div>
</body>
</html>

{{-- <x-guest-layout> --}}
<!-- Session Status -->
{{-- <x-auth-session-status class="mb-4" :status="session('status')" /> --}}

<!-- Email Address -->
{{-- <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div> --}}



{{-- </x-guest-layout> --}}
