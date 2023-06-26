@extends('layouts.base')

@section('content')
    @if (auth()->user()->is_admin == 1)
        <a href="{{ url('admin/dashboard') }}">Admin</a>
    @else
        <a href="{{ url('peminjam/dashboard') }}">Peminjam</a>
    @endif
@endsection
