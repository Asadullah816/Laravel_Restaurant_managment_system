@include('layout.master')
@include('layout.preloader')
@include('layout.header')

<section class="section" id="reservation">
    <div class="container">

        <div class="">
            <div class="contact-form">
                <form id="contact" action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-lg-12">
                            <h4>Login</h4>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <fieldset>
                                <input id="email" placeholder="Email" class="block w-full mt-1" type="email"
                                    name="email" :value="old('email')" required autocomplete="username">
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />

                            </fieldset>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <fieldset>
                                <input placeholder="Password" id="password" class="block w-full mt-1" type="password"
                                    name="password" required autocomplete="new-password">
                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </fieldset>
                        </div>

                        <div class="col-12"><a class="" href="{{ route('register') }}"></div>
                        {{ __("Dont't have Account?") }}
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
