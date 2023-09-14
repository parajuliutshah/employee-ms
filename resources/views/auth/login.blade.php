<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')"/>

    <form class="user " method="POST" action="{{ route('login') }}">
        @csrf
            <div class="form-group">
                <x-text-input placeholder="Enter Email Address..." id="email exampleInputEmail" class="form-control form-control-user" type="email" name="email" :value="old('email')" required
                              autofocus autocomplete="username"/>
                <x-input-error :messages="$errors->get('email')" class="mt-2"/>
            </div>
            <div class="form-group">
                <x-text-input id="password" class="form-control form-control-user"
                              type="password"
                              name="password"
                              placeholder="Password"
                              required autocomplete="current-password"/>

                <x-input-error :messages="$errors->get('password')" class="mt-2"/>
            </div>
            <div class="form-group">
                <div class="custom-control custom-checkbox small">
                    <input id="customCheck" type="checkbox"
                           class="custom-control-input"
                           name="remember">
{{--                    <input type="checkbox" class="custom-control-input" id="customCheck">--}}
                    <label class="custom-control-label" for="customCheck">Remember
                        Me</label>
                </div>
            </div>
            <button class="btn btn-primary btn-user btn-block">
                {{ __('Log in') }}
            </button>
        </form>
        <hr>
        <div class="text-center">
            @if (Route::has('password.request'))
            <a class="small" href="{{ route('password.request') }}"> {{ __('Forgot your password?') }}</a>
            @endif
        </div>
        <div class="text-center">
            <a class="small" href="{{route('register')}}">Create an Account!</a>
        </div>
</x-guest-layout>
