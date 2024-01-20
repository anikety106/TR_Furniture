
@extends('layouts.main')

@section('main-section')

<x-sidebar>
    @slot('header')
        <h3>Dashboard</h3>
    @endslot

    @slot('main')
        <ul>
            <li><a href="#">Users</a></li>
            <li><a href="#">Posts</a></li>
            <li><a href="#">Settings</a></li>
        </ul>
    @endslot
</x-sidebar>

@endsection

