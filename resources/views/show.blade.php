<header>
    <a href="/posts">see all posts</a>
</header>
<div>
    <h3>Title : {{ $post->title }}</h3>
    <p>Content : {{ $post->content }}</p>
</div>
<div>
    <h3>comments : ({{ $post->comments->count() }})</h3>
    @foreach ($post->comments as $comment)

        <p>{{ $comment->content }}</p>
    
    @endforeach
</div>