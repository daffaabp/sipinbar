<!-- kas_form.blade.php -->

@extends('layouts.base')

@section('content')
    <h1 class="h3 mb-3">{{ $title }}</h1>
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">

                    <div class="alert alert-secondary" role="alert">
                        Tanda * wajib diisi.
                    </div>

                    {!! Form::model($model, [
                        'route' => $route,
                        'method' => $method,
                    ]) !!}

                    <div class="form-group mb-3">
                        {!! Form::label('kode', 'Masukkan Kode Barang') !!}
                        {!! Form::text('kode', null ['class' => 'form-control']) !!}
                        <span class="text-danger">{{ $errors->first('kode') }}</span>
                    </div>

                    <div class="form-group mb-3">
                        {!! Form::label('nama', 'Nama Barang') !!}
                        {!! Form::text('nama', null, ['class' => 'form-control']) !!}
                        <span class="text-danger">{{ $errors->first('nama') }}</span>
                    </div>

                    <div class="form-group mb-3">
                        {!! Form::label('merk', 'Merk Barang') !!}
                        {!! Form::text('merk', null, ['class' => 'form-control']) !!}
                        <span class="text-danger">{{ $errors->first('merk') }}</span>
                    </div>

                    <div class="form-group mb-3">
                        {!! Form::label('kondisi', 'Kondisi') !!}
                        {!! Form::text('kondisi', null, ['class' => 'form-control']) !!}
                        <span class="text-danger">{{ $errors->first('kondisi') }}</span>
                    </div>

                    <div class="form-group mb-3">
                        {!! Form::label('status', 'Status') !!}
                        {!! Form::text('status', null, ['class' => 'form-control']) !!}
                        <span class="text-danger">{{ $errors->first('status') }}</span>
                    </div>

                    {!! Form::submit('Simpan', ['class' => 'btn btn-primary']) !!}
                    <a href="{{ route('admin.barang_index', $kurban->id) }}" class="btn btn-secondary mx-2">Kembali</a>
                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    @endsection
