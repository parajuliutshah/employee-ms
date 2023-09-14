<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="form-group">

                <x-text-input placeholder="Full Name" id="name exampleFirstName" class="form-control form-control-user" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>
        <div class="form-group">
            <x-text-input id="email exampleInputEmail" placeholder="Email Address" class="form-control form-control-user" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>
        <div class="form-group row">
            <div class="col-sm-6 mb-3 mb-sm-0">
                <x-text-input id="password" class="form-control form-control-user"
                              type="password"
                              name="password"
                              placeholder="Password"
                              required autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>
            <div class="col-sm-6">
                <x-text-input id="password_confirmation" class="form-control form-control-user"
                              type="password"
                              placeholder="Repeat Password"
                              name="password_confirmation" required autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>
        </div>
        <button class="btn btn-primary btn-user btn-block">
            {{ __('Register') }}
        </button>
        <hr>
    </form>
</x-guest-layout>
