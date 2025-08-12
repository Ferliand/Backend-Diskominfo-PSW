@extends('Layout.app')

@section('content')
    <h1>{{ $title }}</h1>
    <a href="{{ route('News.create') }}"><button class="btn btn-primary">Buat Berita Baru</button></a>
    <table id="example2" class="table table-striped-columns">
        <thead>
            <tr>
                <th>No</th>
                <th>Title</th>
                <th>Content</th>
                <th>Category</th>
            </tr>
        </thead>
        <tbody>
            @php
                $no = 1;
            @endphp
            @foreach ($news as $newslist)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $newslist->title }}</td>
                    <td>{{ $newslist->content }}</td>
                    <td>{{ $newslist->category }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
