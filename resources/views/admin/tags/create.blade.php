@extends('admin.layouts.layout')

@section('content')
    <div class="main_create wrapper_content">
        <div class="main_header">
            <div class="main_title">
                <h1>Create Tag</h1>
                <i class="fas fa-tags"></i>
            </div>
            <div class="main_back">
                <a href="{{ route('index') }}">
                    <i class="fas fa-angle-double-left"></i>
                </a>
            </div>
            <div class="main_back">
                <a href="{{ route('tags.index') }}">
                    <i class="fas fa-angle-left"></i>
                </a>
            </div>
        </div>
        <div class="main_form">
            <form role="form" method="post" action="{{ route('tags.store') }}">
                @csrf
                <label for="title"
                       class="form-label">
                    Name Tag
                </label>
                <input
                    id="title"
                    type="text"
                    name="title"
                    class="form-control @error('title') is-invalid @enderror"
                    placeholder="Enter the tag name"
                >
                @error('title')
                <div class="alert-danger">
                    {{ $message }}<i class="fas fa-exclamation-circle"></i>
                </div>
                @enderror

                <button type="submit" class="btn_create">
                    Create
                </button>
            </form>
        </div>
    </div>
@endsection
