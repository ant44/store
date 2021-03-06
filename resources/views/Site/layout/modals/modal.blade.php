<!-- Sign in / Register Modal -->
<div class="modal fade" id="signin-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="icon-close"></i></span>
                </button>

                <div class="form-box">
                    <div class="form-tab">
                        <ul class="nav nav-pills nav-fill nav-border-anim" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="signin-tab" data-toggle="tab" href="#signin" role="tab" aria-controls="signin" aria-selected="true">ورود</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="register-tab" data-toggle="tab" href="#register" role="tab" aria-controls="register" aria-selected="false">ثبت نام</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="tab-content-5">
                            <div class="tab-pane fade show active" id="signin" role="tabpanel" aria-labelledby="signin-tab">

                                @foreach ($errors->all() as $error)
                                    {{$error}}
                                @endforeach

                                <form action="{{ route('login') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="mobile">موبایل *</label>
                                        <input type="mobile" class="form-control" id="mobile" name="mobile" required value="{{ old('mobile') }}">
                                    </div><!-- End .form-group -->

                                    <div class="form-group">
                                        <label for="singin-password">رمز عبور *</label>
                                        <input type="password" class="form-control" id="password" name="password" required>
                                    </div><!-- End .form-group -->

                                    <div class="form-footer">
                                        <button type="submit" class="btn btn-outline-primary-2">
                                            <span>ورود</span>
                                            <i class="icon-long-arrow-left"></i>
                                        </button>

                                        <div class="custom-control custom-checkbox">
                                            <input name="remember" type="checkbox" class="custom-control-input" id="remember">
                                            <label class="custom-control-label" for="remember">مرا به خاطر
                                                بسپار</label>
                                        </div><!-- End .custom-checkbox -->
                                        @if (Route::has('password.request'))
                                        <a href="{{ route('password.request') }}" class="forgot-link">فراموشی رمز عبور؟</a>
                                        @endif
                                    </div><!-- End .form-footer -->
                                </form>
                                <div class="form-choice">
                                    <p class="text-center">یا ورود با</p>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <a href="#" class="btn btn-login btn-g">
                                                <i class="icon-google"></i>
                                                حساب گوگل
                                            </a>
                                        </div><!-- End .col-6 -->
                                        <div class="col-sm-6">
                                            <a href="#" class="btn btn-login btn-f">
                                                <i class="icon-facebook-f"></i>
                                                حساب فیسبوک
                                            </a>
                                        </div><!-- End .col-6 -->
                                    </div><!-- End .row -->
                                </div><!-- End .form-choice -->
                            </div><!-- .End .tab-pane -->
                            <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab">

                                @foreach ($errors->all() as $error)
                                    {{$error}}
                                @endforeach


                                <form method="POST" action="{{ route('register') }}">
                                    @csrf

                                    <div class="form-group">
                                        <label for="name"> نام شما *</label>
                                        <input type="text" class="form-control" id="name" maxlength="255" minlength="3"   name="name"  required>
                                    </div>

                                    <!-- End .form-group -->
                                    <div class="form-group">
                                        <label for="mobile"> تلفن شما *</label>
                                        <input type="text" class="form-control" minlength="11" maxlength="11" id="mobile" name="mobile"  required>
                                    </div>

                                    <div class="form-group">
                                        <label for="email">آدرس ایمیل شما *</label>
                                        <input type="email" class="form-control" id="email" name="email" required>
                                    </div><!-- End .form-group -->

                                    <div class="form-group">
                                        <label for="password">رمز عبور *</label>
                                        <input type="password" class="form-control" id="password" name="password" required >
                                    </div><!-- End .form-group -->

                                    {{-- <div class="form-group">
                                        <label for="password">تکرار رمز عبور *</label>
                                        <input type="password" class="form-control" id="password_confirmatio" name="password_confirmatio" required >
                                    </div><!-- End .form-group --> --}}

                                    <div class="form-footer">
                                        <button type="submit" class="btn btn-outline-primary-2">
                                            <span>ثبت نام</span>
                                            <i class="icon-long-arrow-left"></i>
                                        </button>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="register-policy" required>
                                            <label class="custom-control-label" for="register-policy">با
                                                <a href="#">قوانین و مقررات </a>موافقم *</label>
                                        </div><!-- End .custom-checkbox -->
                                    </div><!-- End .form-footer -->
                                </form>
                                <div class="form-choice">
                                    <p class="text-center">یا عضویت با</p>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <a href="#" class="btn btn-login btn-g">
                                                <i class="icon-google"></i>
                                                حساب گوگل
                                            </a>
                                        </div><!-- End .col-6 -->
                                        <div class="col-sm-6">
                                            <a href="#" class="btn btn-login  btn-f">
                                                <i class="icon-facebook-f"></i>
                                                حساب فیسبوک
                                            </a>
                                        </div><!-- End .col-6 -->
                                    </div><!-- End .row -->
                                </div><!-- End .form-choice -->
                            </div><!-- .End .tab-pane -->
                        </div><!-- End .tab-content -->
                    </div><!-- End .form-tab -->
                </div><!-- End .form-box -->
            </div><!-- End .modal-body -->
        </div><!-- End .modal-content -->
    </div><!-- End .modal-dialog -->
</div><!-- End .modal -->
<div class="container newsletter-popup-container mfp-hide" id="newsletter-popup-form">
    <div class="row justify-content-center">
        <div class="col-10">
            <div class="row no-gutters bg-white newsletter-popup-content">
                <div class="col-xl-3-5col col-lg-7 banner-content-wrap">
                    <div class="banner-content text-center">
                        <img src="Site/images/popup/newsletter/logo.png" class="logo" alt="logo" width="60" height="15">
                        <h2 class="banner-title">دریافت <span>25<light>%</light></span> تخفیف</h2>
                        <p>با عضویت در خبرنامه فروشگاه ما، یک تخفیف 25 درصدی دریافت کنید و از جدیدترین تخفیف ها مطلع
                            شوید</p>
                        <form action="#">
                            <div class="input-group input-group-round">
                                <input type="email" class="form-control form-control-white" placeholder="ایمیل شما" aria-label="Email Adress" required>
                                <div class="input-group-append">
                                    <button class="btn" type="submit"><span>تایید</span></button>
                                </div><!-- .End .input-group-append -->
                            </div><!-- .End .input-group -->
                        </form>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="register-policy-2" required>
                            <label class="custom-control-label" for="register-policy-2">این پنجره را دوباره
                                نشان نده</label>
                        </div><!-- End .custom-checkbox -->
                    </div>
                </div>
                <div class="col-xl-2-5col col-lg-5 ">
                    <img src="Site/images/popup/newsletter/img-1.jpg" class="newsletter-img" alt="newsletter">
                </div>
            </div>
        </div>
    </div>
</div>
