@extends('layouts.main')

@section('main-section')
    <div class="container">
        @foreach ($blogs as $blog)
            <div>
                <h2>{{ $blog->title }}</h2>
                <p>{{ $blog->content }}</p>
                <div class="d-flex justify-content-center  w-100">
                    @if ($blog->image)
                        <img src="{{ Storage::url($blog->image) }}" alt="Blog Image">
                        {{-- <p>Image Path: {{ Storage::url($blog->image) }}</p> // for image path --}}
                    @endif
                </div>
            </div>
            <hr>
        @endforeach
    </div>
@endsection
