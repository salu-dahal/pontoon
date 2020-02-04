@extends('frontend.master.master')
@section('content')
    <!-- Start contact  -->
    <section id="mu-contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mu-contact-area">
                        <!-- start title -->
                        <div class="mu-title">
                            <h2>Get in Touch</h2>

                        </div>
                        <!-- end title -->
                        <!-- start contact content -->
                        <div class="mu-contact-content">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mu-contact-left">
                                        <form method="post"class="contactform" action="{{route('Contact')}}">
                                            {{csrf_field()}}
                                            <p class="comment-form-author">
                                                <label for="author">Name <span class="required">*</span></label>
                                                <input type="text" required="required" size="30" value="" name="author">
                                            </p>
                                            <p class="comment-form-email">
                                                <label for="email">Email <span class="required">*</span></label>
                                                <input type="email" required="required" aria-required="true" value="" name="email">
                                            </p>
                                            <p class="comment-form-url">
                                                <label for="subject">Subject</label>
                                                <input type="text" name="subject">
                                            </p>
                                            <p class="comment-form-comment">
                                                <label for="comment">Message</label>
                                                <textarea required="required" aria-required="true" rows="8" cols="45" name="comment"></textarea>
                                            </p>
                                            <p class="form-submit">
                                                <input type="submit" value="Send Message" class="mu-post-btn" name="submit">
                                            </p>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mu-contact-right">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.505367519416!2d85.32012251438445!3d27.701678732349333!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19eb19faf563%3A0x98a2104a2408e05a!2sLaxmi%20Plaza!5e0!3m2!1sen!2snp!4v1580723968604!5m2!1sen!2snp" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end contact content -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End contact  -->
@stop
