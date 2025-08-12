@extends('Layout.app')

@section('content')
    <h1>{{ $title }}</h1>
    <a href="{{ route('News.index') }}"><button class="btn btn-primary mb-3" style="margin-left: 70%">Kembali Ke daftar
            Berita</button></a>
    <div class="m-2">
        <form action="{{ route('News.update', $newslist->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="Title" class="form-label">Title</label>
                <input type="text" class="form-control" id="Title" name="title" value="{{ $newslist->title }}"
                    required>
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">Content</label>
                <textarea name="content" class="form-control" id="content" placeholder="Ketikan Konten Disini">{{ $newslist->content }}</textarea>
            </div>
            <div class="col-md-12">
                <select class="form-select mt-3" name="category">
                    <option selected disabled value="{{ $newslist->category }}">{{ $newslist->category }}</option>
                    <option value="sport">Sport</option>
                    <option value="games">Games</option>
                    <option value="music">Music</option>
                </select>
                {{-- <div class="valid-feedback">You selected a Category!</div>
                <div class="invalid-feedback">Please select a Category!</div> --}}
            </div>
            <button type="submit" class="btn btn-primary mt-2">Submit</button>
        </form>
    </div>
@endsection
