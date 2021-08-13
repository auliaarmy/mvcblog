@extends('layouts.master')
@section('content')
    <form action="{{ route('blog.store') }}" method="POST">
        @csrf
        
        <div class="card">
            <div class="card-body">
                <div class="form-group">
                    <label for="image">GAMBAR</label>
                    <input type="file" class="form-control" name="image">
                </div>
                <br>
                <div class="form-group">
                    <label for="title">JUDUL</label>
                    <input type="text" class="form-control" name="title" placeholder="Masukkan Judul Blog">
                </div>
                <br>
                <div class="form-group">
                    <div><label for="content">CONTENT</label></div>
                    <textarea name="content"></textarea>
                </div>
                <br>
                <div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </form>
@endsection