@extends('layout.main')

@section('title', 'Daftar Mahasiswa')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-6">
            <h1 class="mt-3">Daftar Student</h1>

            <a href="students/create" class="btn btn-primary my-3">Tambah Data Student</a>

            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            <ul class="list-group my-3 rounded-0">
                @foreach( $students as $st )
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    {{$st->nama}}
                    <a href="students/{{$st->id}}" class="badge badge-info">detail</a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection
