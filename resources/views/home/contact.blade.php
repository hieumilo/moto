@extends('layouts.app')

@section('content')

<section class="slice">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <!-- Map canvas -->
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7667.700746742359!2d108.21813385444266!3d16.073252458885687!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314218307d81c91d%3A0xbc7c14cab8a09c8!2zxJDhuqFpIGjhu41jIER1eSBUw6Ju!5e0!3m2!1svi!2s!4v1513080336113" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>

            <div class="col-lg-5 ml-lg-auto">
                <h3 class="heading heading-3 strong-300">
                    Công Ty TNHH Xe Máy TC (Việt Nam)
                </h3>

                <p class="lead mt-4 mb-4">
                    Email: <a href="#">support@webpixels.io</a>
                </p>

                <p class="lead mt-4 mb-4">
                    Địa chỉ: 0755.222.333
                </p>

                <p class="lead mt-4 mb-4">
                    Điện thoại: 0755.222.333
                </p>
            </div>
        </div>
    </div>
</section>

<section class="slice sct-color-1">
    <div class="container">
        <div class="section-title section-title--style-1 text-center mb-2">
            <h3 class="section-title-inner text-normal">
                LIÊN HỆ
            </h3>
            <span class="section-title-delimiter clearfix d-none"></span>
        </div>

        <span class="clearfix"></span>

        <div class="row justify-content-center">
            <div class="col-lg-10">
                <!-- Contact form -->
                <form id="form_contact" class="form-default" role="form">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group has-feedback">
                                <label for="" class="text-uppercase c-gray-light">Tên</label>
                                <input type="text" name="name" class="form-control form-control-lg" required="">
                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group has-feedback">
                                <label for="" class="text-uppercase c-gray-light">Email</label>
                                <input type="email" name="email" class="form-control form-control-lg" required="">
                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group has-feedback">
                                <label for="" class="text-uppercase c-gray-light">Địa chỉ</label>
                                <input type="text" name="website" class="form-control form-control-lg" required="">
                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group has-feedback">
                                <label for="" class="text-uppercase c-gray-light">Số điện thoại</label>
                                <input type="text" name="phone" class="form-control form-control-lg" required="">
                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group has-feedback">
                                <label for="" class="text-uppercase c-gray-light">Message</label>
                                <textarea name="message" class="form-control no-resize" rows="5" required=""></textarea>
                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                    </div>

                    <div class="">

                        <button type="reset" class="btn-reset d-none"></button>
                        <button type="submit" class="btn btn-styled btn-base-1 mt-4">Gửi</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection
