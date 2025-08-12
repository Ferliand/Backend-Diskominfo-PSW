@extends('Layout.app')

@section('content')
    <h1>{{ $title }}</h1>
    <a href="{{ route('News.index') }}"><button class="btn btn-primary mb-3" style="margin-left: 70%">Kembali Ke daftar
            Berita</button></a>
    <div class="m-2">
        <form action="{{ route('News.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('POST')
            <div class="mb-3">
                <label for="Title" class="form-label">Title</label>
                <input type="text" class="form-control" id="Title" name="title" required>
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">Content</label>
                <textarea name="content" class="form-control" id="content" placeholder="Ketikan Konten Disini"></textarea>
            </div>
            <div class="col-md-12">
                <select class="form-select mt-3" name="category" required>
                    <option selected disabled value="">Category</option>
                    <option value="sport">Sport</option>
                    <option value="games">Games</option>
                    <option value="music">Music</option>
                </select>
                <div class="valid-feedback">You selected a Category!</div>
                <div class="invalid-feedback">Please select a Category!</div>
            </div>
            <button type="submit" class="btn btn-primary mt-2">Submit</button>
        </form>
    </div>
@endsection
