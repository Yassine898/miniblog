<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ISMO - Mon Blog - @yield('title')</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
    <!-- Navbar -->
    <nav class="navbar navbar-dark bg-primary p-3">
        <div class="container">
            <a href="/posts" class="navbar-brand">See All Posts</a>
            <a href="/posts/{{ $post->id }}/edit" class="navbar-brand">Update</a>
        </div>
    </nav>

    <div class="container mt-4">
        <!-- Post Section -->
        <div class="card shadow-sm p-4">
            <h3 class="text-primary">Title: {{ $post->title }}</h3>
            <p class="text-secondary">{{ $post->content }}</p>
        </div>

        <!-- Comments Section -->
        <div class="mt-4">
            <h4 class="text-success">Comments ({{ $post->comments->count() }})</h4>
            <ul class="list-group">
                @foreach ($post->comments as $comment)
                    <li class="list-group-item">
                        <p class="mb-1">{{ $comment->content }}</p>
                        <small class="text-muted">{{ $comment->created_at->diffForHumans() }}</small>
                    </li>
                @endforeach
            </ul>
        </div>

        <!-- Comment Form -->
        <div class="mt-4">
            <h5 class="text-primary">Add a Comment:</h5>
            <form method="POST" action="/posts/{{ $post->id }}/comments" class="card p-3 shadow-sm">
                @csrf
                <div class="mb-3">
                    <textarea name="content" class="form-control" rows="3" placeholder="Write a comment..." required></textarea>
                </div>
                <button type="submit" class="btn btn-primary w-100">Add Comment</button>
            </form>
        </div>
    </div>

    <!-- Bootstrap JS (Optional for some features) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
