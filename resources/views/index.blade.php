<h1>Posts:({{ $posts->count() }})</h1>
@foreach ($posts as $post)

<div>
    <h3>Title:{{ $post->title }}</h3>
    <p>{{ Str::limit($post->content,50) }}</p>
</div>
<a href="/posts/post/{{$post->id}}">see details</a>
@endforeach