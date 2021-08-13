@extends('layouts.master')
@section('content')

    <div class="container">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <a href="{{ route('blog.create') }}" class="d-none d-sm-inline-block btn btn-success shadow-sm"><i
        class="text-white"></i> Tambah Data Baru [+]</a>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Gambar</th>
                <th scope="col">Judul</th>
                <th scope="col">Content</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
    @foreach($blogs as $blog)
        <tbody>
            <tr>
                <td>{{ ++$i }}</td>
                <td>
                    <img src="{{ url('/img/'.$blog->image) }}" class="rounded" style="width: 150px">
                </td>
                <td>{{$blog['title']}}</td>
                <td>{{$blog['content']}}</td>
                <td>
                    <form action="{{ route('blog.destroy',$blog->id) }}" method="POST">
                        <a class="btn btn-warning" href="{{ route('blog.edit',$blog->id) }}">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
        </tbody>
    @endforeach
    </table>
</div>
@endsection


