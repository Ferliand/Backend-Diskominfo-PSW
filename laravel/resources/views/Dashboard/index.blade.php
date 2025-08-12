@extends('Layout.app')

@section('content')
    <h1>{{ $title }}</h1>
    <ul class="m-2 mb-2">
        <li>
            <a href="{{ route('News.index') }}"><button class="btn btn-primary">Lihat Berita</button></a>

        </li>
        <li>
            <a href="{{ route('Pengumuman.index') }}"><button class="btn btn-primary">Lihat Pengumuman</button></a>

        </li>
    </ul>
@endsection
