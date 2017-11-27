@extends('layouts.app')

@section('content')

<section class="slice sct-color-1">
    <div class="container">
        <div class="section-title section-title--style-1 text-center mb-2">
            <h3 class="section-title-inner text-normal">
                Drop us a line
            </h3>
            <span class="section-title-delimiter clearfix d-none"></span>
        </div>

        <span class="clearfix"></span>

        <div class="fluid-paragraph fluid-paragraph-sm c-gray-light strong-300 text-center">
            Start building fast, beautiful and modern looking websites in no time using our theme.
        </div>

        <span class="space-xs-xl"></span>

        <div class="row justify-content-center">
            <div class="col-lg-8">
                <!-- Contact form -->
                <form id="form_contact" class="form-default" role="form">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group has-feedback">
                                <label for="" class="text-uppercase c-gray-light">Your name</label>
                                <input type="text" name="name" class="form-control form-control-lg" required="">
                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group has-feedback">
                                <label for="" class="text-uppercase c-gray-light">Email address</label>
                                <input type="email" name="email" class="form-control form-control-lg" required="">
                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group has-feedback">
                                <label for="" class="text-uppercase c-gray-light">Website</label>
                                <input type="text" name="website" class="form-control form-control-lg" required="">
                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group has-feedback">
                                <label for="" class="text-uppercase c-gray-light">Phone</label>
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
                        <button type="submit" class="btn btn-styled btn-base-1 mt-4">Send message</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection
