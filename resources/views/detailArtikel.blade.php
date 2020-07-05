@extends('layouts/master')

@section('title','Detail Artikel')
@section('content')
<div class="container">
<a href="/artikel" class="btn btn-danger mb-3">Kembali</a>
<div style="background-color: white; border-radius: 10px; padding: 15px;">
    <h2>Judul : {{ $artikel->judul }}</h2>
    <p>Slug : {{ $artikel->slug }}</p>
    <p>{{ $artikel->isi }}</p>
</div>
</div>
@endsection
