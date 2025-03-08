<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Post</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <nav class="nav navbar-dark bg-primary p-3">
        <a href="/posts" class="navbar-brand">home</a>
    </nav>
    <div class="container mt-5">
        <h2 class="text-primary mb-4">Add a New Post</h2>

        <form method="POST" action="/posts/{{ $post->id }}/update">
            @csrf  <!-- CSRF protection -->
            @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label">Post Title:</label>
                <input type="text" name="title" id="title" class="form-control" placeholder="Enter title" required value="{{ $post->title }}">
            </div>

            <div class="mb-3">
                <label for="content" class="form-label">Post Content:</label>
                <textarea name="content" id="content" class="form-control" rows="5" required>
                {{ $post->content }}
                </textarea>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
