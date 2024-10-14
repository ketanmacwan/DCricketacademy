<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Login</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
<style type="text/css">
    body {
        margin-top: 20px;
        background: #f6f9fc;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .account-block {
        padding: 0;
        background-image: url('https://bootdey.com/img/Content/bg1.jpg');
        background-repeat: no-repeat;
        background-size: cover;
        height: 100%;
        position: relative;
    }

    .account-block .overlay {
        -webkit-box-flex: 1;
        -ms-flex: 1;
        flex: 1;
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        background-color: rgba(0, 0, 0, 0.4);
    }

    .account-block .account-testimonial {
        text-align: center;
        color: #fff;
        position: absolute;
        margin: 0 auto;
        padding: 0 1.75rem;
        bottom: 3rem;
        left: 0;
        right: 0;
    }

    .text-theme {
        color: #5369f8 !important;
    }

    .btn-theme {
        background-color: #5369f8;
        border-color: #5369f8;
        color: #fff;
    }

    .register-button {
        display: flex;
        margin-top: 2rem;
        margin-block-end: 1rem;
    }

</style>
</head>
<body>
<div id="main-wrapper" class="container">
    <div class="row justify-content-center">
        <div class="col-xl-10">
            <div class="card border-0">
                <div class="card-body p-0">
                    <div class="row no-gutters">
                        <div class="col-lg-6">
                            <div class="p-5">
                                <!-- Session Status -->
                                <x-auth-session-status class="mb-4" :status="session('status')" />

                                <form method="POST" action="{{ route('login') }}">
                                    @csrf

                                    <!-- Email Address -->
                                    <div>
                                        <x-input-label for="email" :value="__('Email')" />
                                        <x-text-input id="email" class="form-control mb-3" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                    </div>

                                    <!-- Password -->
                                    <div class="mb-5">
                                        <x-input-label for="password" :value="__('Password')" />

                                        <x-text-input id="password" class="form-control mb-3"
                                                        type="password"
                                                        name="password"
                                                        required autocomplete="current-password" />

                                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                    </div>

                                    <!-- Remember Me -->
                                    <div class="block mt-4">
                                        <label for="remember_me" class="inline-flex items-center">
                                            <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                                            <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                        </label>
                                    </div>

                                    <div class="flex items-center justify-end mt-4">
                                        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                                            {{ __('Forgot your password?') }}
                                        </a>


                                        <div class="register-button">
                                            <button type="submit" class="btn btn-outline-primary">
                                              <i class="fas fa-user-plus mr-2"></i>
                                              Log in
                                            </button>
                                          </div>

                                        <div class="register-button">
                                            <a href="{{ route('register') }}" class="btn btn-outline-primary">
                                              <i class="fas fa-user-plus mr-2"></i>
                                              Register
                                            </a>
                                          </div>




                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-6 d-none d-lg-inline-block">
                            <div class="account-block rounded-right">
                                <div class="overlay rounded-right"></div>
                                <div class="account-testimonial">
                                    <h4 class="text-white mb-4">Welcome My OWN Website!</h4>
                                    <p class="lead text-white">"Darkness is Nothing but Absence of Light."</p>
                                    <p>- Joy Macwan</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript">

</script>
</body>
</html>
