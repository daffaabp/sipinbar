@extends('layouts.base')

@section('content')
    <h1 class="h3 mb-3">Data Barang</h1>
    <div class="row">
        <div class="card">
            <div class="card-body">
                {!! Form::open([
                    'url' => url()->current(),
                    'method' => 'GET',
                    'class' => 'row row-cols-lg-auto align-items-center',
                ]) !!}

                {{-- Bootstrap 5.2 Horizontal Form --}}

                <div class="col-auto">
                    <a href="{{ route('barang.create') }}" class="btn btn-primary">Tambah Data Barang</a>
                </div>

                <div class="col-auto">
                    <label for="inlineFormSelectPref">Nama Barang</label>
                    {!! Form::text('q', request('q'), [
                        'class' => 'form-control',
                        'placeholder' => 'Nama Barang',
                    ]) !!}
                </div>

                <div class="col-auto mt-3">
                    <button type="submit" class="btn btn-primary">Cari</button>
                </div>
                {!! Form::close() !!}

                <div class="table-responsive mt-3">
                    <table class="{{ config('app.table_style') }}">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Kode</th>
                                <th>Nama Barang</th>
                                <th>Merk</th>
                                <th>Kondisi</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($models as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->kode }}</td>
                                    <td>{{ $item->nama }}</td>
                                    <td>{{ $item->merk }}</td>
                                    <td>{{ $item->kondisi }}</td>
                                    <td>{{ $item->status }}</td>
                                    <td>
                                        {!! Form::open([
                                            'method' => 'DELETE',
                                            'route' => ['barang.destroy', $item->id],
                                            'style' => 'display:inline',
                                        ]) !!}
                                        @csrf
                                        <a href="{{ route('barang.edit', $item->id) }}"
                                            class="btn btn-sm btn-primary mb-1 mx-1">Edit</a>
                                        <button type="submit" class="btn btn-sm btn-danger mb-1 mx-1"
                                            onclick="return confirm('Apakah Anda yakin ingin menghapus data barang ini?')">Hapus</button>
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
@endsection
