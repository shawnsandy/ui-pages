@extends('page::page-layouts.main-page')
@section('title', 'Contact us')
@section('content')
    <div class="container">
        <div class="row">
            <div class="container text-center">
                <h1 class="text-capitalize text-center" data-aos="zomm-in">We would love to hear from you.</h1>
                <p class="lead">Visit us at {{ config('pagekit.address') }}, Email or via Social Media, we look forward to hearing from you.</p>
            </div>
                <div class="row">

                    <section>
                        @include('page::partials.messages')
                    </section>
                    <div class="col-md-6">
                        {{--<h2 class="text-center"><i class="fa fa-envelope" aria-hidden="true"></i> Visit Us</h2>--}}

                        {{--<h1 class="text-center"><i class="fa fa-envelope" aria-hidden="true"></i></h1>--}}
                        <div class="g-map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d56109.69065573731!2d-82.58421839793681!3d28.483893056031686!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sus!4v1471476590737"
                                    width="100%" height="350" frameborder="0" style="border:0" allowfullscreen>
                            </iframe>
                        </div>
                    </div>
                    <div class="col-md-offset-2"></div>
                    <div class="col-md-5">
                        {{ Html::pageContactForm() }}
                    </div>
            </div>
        </div>
    </div>

@endsection
