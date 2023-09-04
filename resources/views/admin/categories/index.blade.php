@extends('admin.layouts.layout')

@section('content')
    <div class="main_show wrapper_content">
        <div class="main_header">
            <div class="main_title">
                <h1>All Categories</h1>
            </div>
            <div class="main_back">
                <a href="{{ route('index') }}">
                    <i class="fas fa-angle-double-left"></i>
                </a>
            </div>
        </div>
        @if(count($categories))
            <table>
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Slug</th>
                    <th colspan="3">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($categories as $category)
                    <tr>
                        <td>{{$category->id}}</td>
                        <td>{{$category->title}}</td>
                        <td>{{$category->slug}}</td>
                        <td>
                            <a href="show_one_category.html">
                                <i class="fas fa-eye"></i>
                            </a>
                        </td>
                        <td>
                            <a href="show_one_category.html">
                                <i class="fas fa-pencil-alt"></i>
                            </a>
                        </td>
                        <td>
                            <a href="">
                                <i class="fas fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @else
            <p class="not_found">Categories not found...</p>
        @endif
    </div>
@endsection
