@include('layout.master')
@include('layout.preloader')
@include('layout.header')

<section class="section" id="reservation">
    <div class="container">

        <div class="">
            <div class="contact-form">
                <form id="contact" action="{{ route('register') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-lg-12">
                            <h4>Register Your self </h4>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <fieldset>
                                <input id="name" placeholder="Name" class="block mt-1 w-full" type="text"
                                    name="name" :value="old('name')" required autofocus autocomplete="name">
                                <x-input-error :messages="$errors->get('name')" class="mt-2" />

                            </fieldset>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <fieldset>
                                <input id="email" placeholder="Email" class="block mt-1 w-full" type="email"
                                    name="email" :value="old('email')" required autocomplete="username">
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />

                            </fieldset>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <fieldset>
                                <input placeholder="Password" id="password" class="block mt-1 w-full" type="password"
                                    name="password" required autocomplete="new-password">
                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </fieldset>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <fieldset>
                                <input id="password_confirmation" class="block mt-1 w-full" type="password"
                                    name="password_confirmation" placeholder="Confirm Password" required
                                    autocomplete="new-password">
                                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                            </fieldset>
                        </div>
                        <div class="col-12"><a class="" href="{{ route('login') }}"></div>
                        {{ __('Already registered?') }}
                        </a>
                        <div class="col-lg-12">
                            <fieldset>
                                <button type="submit" id="form-submit" class="main-button-icon">Register</button>
                            </fieldset>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
</section>

@include('layout.footer')
@include('layout.script')
