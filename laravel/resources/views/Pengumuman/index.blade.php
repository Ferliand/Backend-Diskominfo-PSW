@extends('Layout.app')

@section('content')
    <h1>{{ $title }}</h1>
    <a href="{{ route('index') }}"><button class="btn btn-primary">Kembali ke menu</button></a>
    <a href="{{ route('Pengumuman.create') }}"><button class="btn btn-primary">Buat {{ $title }}</button></a>
    <table id="news-table" class="table table-striped-columns news-table">
        <thead>
            <tr>
                <th>No</th>
                <th>Title</th>
                <th>Content</th>
                <th>Category</th>
                <th>Jumlah</th>
                <th>Posisis</th>
                <th>Dibuat Pada</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @php
                $no = 1;
            @endphp

            @foreach ($Pengumuman as $pengumumanlist)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $pengumumanlist->title }}</td>
                    <td>{{ $pengumumanlist->content }}</td>
                    <td>{{ $pengumumanlist->category }}</td>
                    <td>{{ $pengumumanlist->jumlah }}</td>
                    <td>{{ $pengumumanlist->posisi }}</td>
                    <td>{{ $pengumumanlist->created_at->format('y-m-d') }}</td>
                    <td><a href="{{ route('Pengumuman.show', $pengumumanlist->id) }}"><button
                                class="btn btn-warning">Perbarui</button></a>

                        {{-- Modal Delete --}}
                        <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal"
                            data-bs-target="#deleteModal{{ $pengumumanlist->id }}">Delete</button>

                        <div class="modal fade" id="deleteModal{{ $pengumumanlist->id }}" tabindex="-1"
                            aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header bg-danger text-white">
                                        <h5 class="modal-title">Konfirmasi Hapus</h5>
                                        <button type="button" class="btn-close btn-close-white"
                                            data-bs-dismiss="modal"></button>
                                    </div>
                                    <div class="modal-body text-center">
                                        <p>Yakin ingin menghapus
                                            <span class="fw-semibold text-red">{{ $pengumumanlist->nama_barang }}</span>?
                                        </p>
                                    </div>
                                    <div class="modal-footer justify-content-center">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Batal</button>
                                        <form action="{{ route('Pengumuman.destroy', $pengumumanlist->id) }}"
                                            method="POST" onsubmit="showLoading(this)">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger">Hapus</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- End Modal Delete --}}

                        <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#detailModal">
                            Display
                        </button>

                        <div class='modal fade' id='detailModal' tabindex='-1' aria-hidden='true'>
                            <div class='modal-dialog modal-dialog-centered modal-md'>
                                <div class='modal-content rounded-3'>
                                    <div class='modal-header bg-info text-white'>
                                        <h5 class='modal-title fw-semibold fs-5'>Detail
                                            Berita</h5>
                                        <button type='button' id="btnCloseDetailModal" class='btn-close btn-close-white'
                                            data-bs-dismiss='modal'></button>
                                    </div>
                                    <div class='modal-body' id="detailBody">
                                        <div id="barangDetail">
                                            <p><strong>Title:</strong>
                                                {{ $pengumumanlist->title }}
                                            </p>
                                            <p><strong>Content:</strong>
                                                {{ $pengumumanlist->content }}
                                            </p>
                                            <p><strong>category:</strong>
                                                {{ $pengumumanlist->category }}
                                            </p>
                                            <p><strong>Posisi:</strong>
                                                {{ $pengumumanlist->posisi }}
                                            </p>
                                            <p><strong>Jumlah:</strong>
                                                {{ $pengumumanlist->jumlah }}
                                            </p>
                                            <p><strong>Dibuat:</strong>
                                                {{ $pengumumanlist->created_at }}
                                            </p>
                                            <p><strong>diupdate:</strong>
                                                {{ $pengumumanlist->updated_at }}
                                            </p>
                                        </div>
                                    </div>
                                    <div class='modal-footer'>
                                        <button type='button' class='btn btn-secondary btn-sm' id="btnDetailBatal"
                                            data-bs-dismiss='modal'>Tutup</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- End Show --}}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

{{-- @push('scripts')
    <script>
        news = @json($news);
    </script>
@endpush --}}


{{-- <script>
    $(function() {
        $('#news-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{!! url('jrData') !!}',
            columns: [{
                    data: 'id',
                    name: 'id'
                },
                {
                    data: 'title',
                    name: 'title'
                },
                {
                    data: 'content',
                    name: 'content'
                },
                {
                    data: 'category',
                    name: 'category'
                },
                // {
                //     data: 'postal_code',
                //     name: 'postal_code'
                // },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searchable: false
                }
            ]
        });
    });
</script> --}}
