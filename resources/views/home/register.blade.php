@include('layout.master')
@include('layout.preloader')
@include('layout.header')

<section class="section" id="reservation">
    <div class="container">

        <div class="">
            <div class="contact-form">
                <form id="contact" action="" method="post">
                    <div class="row">
                        <div class="col-lg-12">
                            <h4>Register </h4>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <fieldset>
                                <input name="name" type="text" id="name" placeholder="Your Name*"
                                    required="">
                            </fieldset>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <fieldset>
                                <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*"
                                    placeholder="Your Email Address" required="">
                            </fieldset>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <fieldset>
                                <input name="" type="password" id="phone" placeholder="Password"
                                    required="">
                            </fieldset>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <fieldset>
                                <input name="password_confirmation" type="password" id="phone"
                                    placeholder="Password" required="">
                            </fieldset>
                        </div>
                        <div class="col-lg-12">
                            <fieldset>
                                <button type="submit" id="form-submit" class="main-button-icon"></button>
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
