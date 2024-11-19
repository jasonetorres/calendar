@extends('layouts.app')

@section('content')
<div class="container d-flex align-items-center justify-content-center" style="min-height: 100vh;">
    <div class="card" style="max-width: 500px; border-radius: 10px;">
        <div class="card-body">
            <h1 class="text-center">Add New Stream</h1>
            <form action="/streams" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Stream Title</label>
                    <input type="text" name="title" class="form-control" id="title" placeholder="Stream Title" required>
                </div>
                <div class="mb-3">
                    <label for="platform" class="form-label">Platform</label>
                    <input type="text" name="platform" class="form-control" id="platform" placeholder="Platform" required>
                </div>
                <div class="mb-3">
                    <label for="link" class="form-label">Stream Link</label>
                    <input type="url" name="link" class="form-control" id="link" placeholder="Stream Link" required>
                </div>
                <div class="mb-3">
                    <label for="start_time" class="form-label">Start Time</label>
                    <input type="datetime-local" name="start_time" class="form-control" id="start_time" required>
                </div>
                <div class="mb-3">
                    <label for="thumbnail" class="form-label">Thumbnail Image</label>
                    <input type="file" name="thumbnail" class="form-control" id="thumbnail" accept="image/*" required>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Add Stream</button>
                </div>
            </form>
        </div>
    </div>
</div>
<footer class="card text-center mt-4">
    <p>come find us</p>
    <div class="social-icons mb-2">
        <a href="https://discord.gg/UGpsU4Gn" target="_blank" class="fab fa-discord"></a>
        <a href="https://x.com/torcdotdev" target="_blank" class="fab fa-twitter"></a>
        <a href="https://www.linkedin.com/company/76976620" target="_blank" class="fab fa-linkedin-in"></a>
        <a href="https://github.com/opentorc" target="_blank" class="fab fa-github"></a>
    </div>
    <div class="copyright">
        <p>&copy; 2024 <a href="https://torc.dev" target="_blank">Torc.dev</a> All rights reserved. Built with <a href="https://laravel.com" target="_blank">Laravel</a> and <a href="https://sevalla.com" target="_blank">Sevalla</a>.</p>
    </div>
</footer>
@endsection 