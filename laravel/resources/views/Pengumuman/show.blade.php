@extends('Layout.app')

@section('content')
    <h1>{{ $title }}</h1>
    <a href="{{ route('Pengumuman.index') }}"><button class="btn btn-primary mb-3" style="margin-left: 70%">Kembali Ke daftar
            Berita</button></a>
    <div class="m-2">
        <form action="{{ route('Pengumuman.update', $Pengumumanlist->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="Title" class="form-label">Title</label>
                <input type="text" class="form-control" id="Title" name="title"
                    value="{{ $Pengumumanlist->title }}" required>
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">Content</label>
                <textarea name="content" class="form-control" id="content" placeholder="Ketikan Konten Disini">{{ $Pengumumanlist->content }}</textarea>
            </div>
            <div class="col-md-12 mb-3">
                <label for="content" class="form-label">Category</label>
                <select class="form-select mt-3" name="category">
                    <option selected value="{{ $Pengumumanlist->category }}">{{ $Pengumumanlist->category }}
                    </option>
                    <option value="IT">IT</option>
                    <option value="Administrasi">Administrasi</option>
                    <option value="Senior IT">Senior IT</option>
                </select>
            </div>

            <div class="col-md-12 mb-3">
                <label for="content" class="form-label">Posisi</label>
                <select class="form-select mt-3" name="posisi">
                    <option selected value="{{ $Pengumumanlist->posisi }}">{{ $Pengumumanlist->posisi }}
                    </option>
                    <option value="Backend">Backend</option>
                    <option value="CYBER Security">Cyber Security</option>
                    <option value="IOT">IOT</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="posisi" class="form-label">Jumlah</label>
                <input type="number" class="form-control" id="posisi" name="jumlah" min="0"
                    value="{{ $Pengumumanlist->jumlah }}" required>
            </div>

            <button type="submit" class="btn btn-primary mt-2">Submit</button>
        </form>
    </div>
@endsection
