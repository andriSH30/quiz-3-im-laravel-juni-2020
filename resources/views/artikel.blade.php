@extends('layouts/master')

@section('title','Artikel')

@section('content')
<div class="container mt-3">
        <a href="/artikel/create" class="btn btn-success mb-3">Buat  Artikel</a> <h2 style="text-align: center;">Daftar Artikel</h2>
        <hr>
        @if(session('pesan'))
            <div class="alert alert-success" style="text-align: center;" role="alert">
                {{ session('pesan') }}
            </div>
        @elseif(session('jawab'))
            <div class="alert alert-info" style="text-align: center;" role="alert">
                {{ session('jawab') }}
            </div>
        @elseif(session('pesanUpdate'))
            <div class="alert alert-warning" style="text-align: center;" role="alert">
                {{ session('pesanUpdate') }}
            </div>
        @elseif(session('pesanHapus'))
            <div class="alert alert-dark" style="text-align: center;" role="alert">
                {{ session('pesanHapus') }}
            </div>
        @endif

        <table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col">No</th>
                <th scope="col">judul</th>
                <th scope="col" style="text-align: center;">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($artikel as $a)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $a->judul }}</td>
                    <td style="display: flex; justify-content: center;"><a href="/artikel/{{$a->id}}" class="btn btn-outline-info">Detail</a>&nbsp; <a href="/artikel/{{$a->id}}/edit" class="btn btn-outline-warning">Edit</a>&nbsp; <a href="/artikel/{{$a->id}}/hapus" class="btn btn-outline-danger">Hapus</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
