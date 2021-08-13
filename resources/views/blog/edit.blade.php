@extends('layouts.master')
@section('content')

    <form action="{{ route('blog.update',$blogs->id) }}" method="POST">
        @csrf
        @method('PUT')
    <div class="card">
        <div class="card-body">
            <div class="form-group">
                <label for="image">Gambar</label>
                <input type="file" class="form-control" name="image" value="{{ $blogs->image }}">
            </div>
            <div class="form-group">
                <label for="title">Judul</label>
                <input type="text" class="form-control" name="title" value="{{ $blogs->title }}">
            </div>
            <br>
            <div class="form-group">
                <label for="content">Content</label>
                <textarea name="content" value="{{ $blogs->content }}"></textarea>
            </div>
            <br>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        </div>
    </form>
@endsection