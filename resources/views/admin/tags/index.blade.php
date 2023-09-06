@extends('admin.layouts.layout')

@section('content')
    <div class="main_show wrapper_content">
        <div class="main_header">
            <div class="main_title">
                <h1>All Tags</h1>
            </div>
            <div class="main_back">
                <a href="{{ route('index') }}">
                    <i class="fas fa-angle-double-left"></i>
                </a>
            </div>
            <div class="main_back">
                <a href="{{ route('tags.create') }}">
                    <i class="fas fa-plus"></i>
                </a>
            </div>
        </div>
        @if(count($tags))
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
                @foreach($tags as $tag)
                    <tr>
                        <td>{{$tag->id}}</td>
                        <td>{{$tag->title}}</td>
                        <td>{{$tag->slug}}</td>
                        <td>
                            <a href="{{ route('tags.show', $tag->id) }}">
                                <i class="fas fa-eye"></i>
                            </a>
                        </td>
                        <td>
                            <a href="{{ route('tags.edit',['tag' => $tag->id]) }}">
                                <i class="fas fa-pencil-alt"></i>
                            </a>
                        </td>
                        <td>
                            <form
                                action="{{ route('tags.destroy', ['tag'=>$tag->id]) }}"
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
            <p class="not_found">Tags not found...</p>
        @endif
    </div>
@endsection
