<div class="markdown-posts">
    <h2>{!! strip_tags($post['title'])  !!}</h2>
    <p class="meta"><small><em>Posted : {{ $post['time_ago'] }}</em></small></p>
    <p>{{ strip_tags($post['excerpt']) }}</p>
    <div class="read-more text-right">
        <a href="{{ $post['url'] }}" class="btn btn-link btn-sm text-capitalize">Read full article</a>
    </div>
    <hr>
</div>
