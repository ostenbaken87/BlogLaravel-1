@extends('admin.layouts.layout')

@section('content')
    <div class="main_create wrapper_content">
        <div class="main_header">
            <div class="main_title">
                <h1>Creat Categories</h1>
                <i class="fas fa-th-list"></i>
            </div>
            <div class="main_back">
                <a href="{{ route('index') }}">
                    <i class="fas fa-angle-double-left"></i>
                </a>
            </div>
        </div>
        <form role="form" method="post" action="{{ route('categories.store') }}">
            @csrf
            <label for="title"
                   class="form-label">
                Name category
            </label>
            <input
                id="title"
                type="text"
                name="title"
                class="form-control"
                placeholder="Enter the category name"
                value="{{ old('title') }}"
            >

            <button type="submit" class="btn_create">
                Create
            </button>
        </form>
    </div>
@endsection
