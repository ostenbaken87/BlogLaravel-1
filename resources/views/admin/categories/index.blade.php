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
            <div class="main_back">
                <a href="{{ route('categories.create') }}">
                    <i class="fas fa-plus"></i>
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
                            <a href="{{ route('categories.show', $category->id) }}">
                                <i class="fas fa-eye"></i>
                            </a>
                        </td>
                        <td>
                            <a href="{{ route('categories.edit',['category' => $category->id]) }}">
                                <i class="fas fa-pencil-alt"></i>
                            </a>
                        </td>
                        <td>
                            <form
                                action="{{ route('categories.destroy', ['category'=>$category->id]) }}"
                                method="post" class="form-delete">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-delete-items"
                                        onclick="return confirm('Подтвердите удаление')">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
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
