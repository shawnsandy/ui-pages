@if($links = MKD::markdownMenu())
    @foreach($links as $link)
        <p>{!! $link  !!}</p>
    @endforeach
@endif
