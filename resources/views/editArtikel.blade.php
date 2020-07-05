@extends('layouts/master')

@section('title','Edit Artikel')

@section('content')
<div class="container mt-3">
        <a href="/artikel" class="btn btn-danger mb-3">Kembali</a> <h2 style="text-align: center;">Buat Artikel</h2>
        <hr>
        <form method="post" action="/artikel/{{$artikel->id}}/update">
        @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Judul</label>
                <input value="{{$artikel->judul}}" name="judul" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">isi</label>
                <textarea name="isi" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$artikel->isi}}</textarea>
            </div>
            <button type="submit" class="btn btn-outline-primary">Submit</button>
        </form>
    </div>

@endsection
