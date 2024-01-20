<!-- resources/views/blogs/create.blade.php -->

@extends('admin.admin_layouts.main')

@section('main-section')
    <div class="container">
        <form action="{{ route('blogs.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div>
                <label for="title">Title:</label>
                <input type="text" class="form-control" name="title" id="title" required>
            </div>

            <div>
                <label for="content">Content:</label>
                <textarea class="form-control" name="content" id="content" rows="4" required></textarea>
            </div>

            <div>
                <label for="image">Upload Image:</label>
                <input type="file" class="form-control" name="image" accept="image/jpeg, image/png, image/gif">
            </div>

            <div>
                <button type="submit" class="btn btn-primary">Create Blog</button>
            </div>
        </form>
    </div>
@endsection
