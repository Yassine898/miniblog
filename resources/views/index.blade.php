<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ISMO - Mon Blog - @yield('title')</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
    <div class="container mt-4">
    <nav class="navbar navbar-dark bg-primary p-3">
        <div class="container">
            <a href="/posts" class="navbar-brand">See All Posts</a>
            <a href="{{ route('post.form') }}" class="navbar-brand">Add Post</a>
        </div>
    </nav>
        <!-- Posts Heading -->
        <h1 class="text-primary mb-4">Posts ({{ $posts->count() }})</h1>

        <!-- Loop through Posts -->
        <div class="row">
            @foreach ($posts as $post)
                <div class="col-md-6 col-lg-4 mb-3">
                    <div class="card shadow-sm border-primary">
                        <div class="card-body">
                            <h5 class="card-title text-primary">{{ $post->title }}</h5>
                            <p class="card-text text-secondary">{{ Str::limit($post->content, 50) }}</p>
                            <a href="/posts/post/{{$post->id}}" class="btn btn-outline-primary btn-sm">See Details</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Bootstrap JS (Optional for interactive features) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
