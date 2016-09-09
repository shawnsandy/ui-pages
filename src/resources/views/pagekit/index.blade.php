@extends('page::page-layouts.default')

@section('page')

@include('page::shared.header', ["class_name" => "landing bg-5"])


@include('page::shared.nav')

<section class="sub-header text-center">
    <div class="container">
        <h1>
            Just add content.
        </h1>
        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est error quae nostrum beatae, iusto accusantium repudiandae accusamus veritatis, voluptatum nesciunt dolorem aspernatur saepe a asperiores.
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea doloribus similique officiis laudantium ratione praesentium. Voluptatibus, commodi saepe molestias ea iure optio dignissimos. Non, iusto.
        </p>
        <p>
            @hello('World')
        </p>
    </div>
</section>

@include('page::shared.footer')

@endsection

@push('styles')

<style type="text/css">
    .logo {
        display: none;
    }
</style>
@endpush
@push('scripts')
<script src="/packages/aos/aos.js"></script>
<script>
AOS.init();
    $(document).ready(function(){
        $('.logo').fadeToggle( 5000, "linear" );
    })
</script>

@endpush
