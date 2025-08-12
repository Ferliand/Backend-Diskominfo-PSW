@extends('Layout.app')

@section('content')
    <h1>{{ $title }}</h1>
    <a href="{{ route('Pengumuman.index') }}"><button class="btn btn-primary mb-3" style="margin-left: 70%">Kembali Ke Daftar
            {{ $title }}</button></a>
    <div class="m-2">
        <form action="{{ route('Pengumuman.store') }}" method="POST" enctype="multipart/form-data">
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
            <div class="col-md-12 mb-3">
                <label for="content" class="form-label">Category</label>
                <select class="form-select mt-3" name="category">
                    <option selected disabled value="">Category</option>
                    <option value="IT">IT</option>
                    <option value="Administrasi">Administrasi</option>
                    <option value="Senior IT">Senior IT</option>
                </select>
            </div>
            <div class="col-md-12 mb-3">
                <label for="content" class="form-label">Posisi</label>
                <select class="form-select mt-3" name="posisi" required>
                    <option selected disabled value="">Posisi</option>
                    <option value="Backend">Backend</option>
                    <option value="CYBER Security">Cyber Security</option>
                    <option value="IOT">IOT</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="posisi" class="form-label">Jumlah</label>
                <input type="number" class="form-control" id="posisi" name="jumlah" min="0" required>
            </div>

            <button type="submit" class="btn btn-primary mt-2">Submit</button>
        </form>
    </div>
@endsection
