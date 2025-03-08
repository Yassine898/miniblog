<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ISMO - Mon Blog - @yield('title')</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light ">
    <nav class="navbar navbar-dark bg-primary p-3">
        <div class="container d-flex justify-content-between align-items-center">
            <a href="/posts" class="navbar-brand">See All Posts</a>

            <form action="/posts/Search" class="d-flex bg-white rounded-pill overflow-hidden shadow-sm" method="POST">
                @csrf
                <input type="text" class="form-control border-0 px-3" placeholder="Search.." style="width: 200px;" name="searchterm">
                <button type="submit" class="btn btn-outline-success">Search</button>
            </form>

            <a href="{{ route('post.form') }}" class="navbar-brand btn btn-outline-warning">Add Post</a>
        </div>
    </nav>

    <div class="container ">
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
                        <div class="row">
                            <div class="col-6"> <a href="/posts/post/{{$post->id}}" class="btn btn-outline-primary btn-sm ">See Details</a></div>
                            <div class="col-6">
                                <form action="/posts/{{ $post->id }}/delete" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Are you sure?')">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <!-- Bootstrap JS (Optional for interactive features) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>