@foreach($breadcrumbs as $name => $url)
    <a href="{{ $url }}" class="btn btn-link"><i class="fa fa-angle-right"></i> {{ ucwords($name) }}</a>
@endforeach
