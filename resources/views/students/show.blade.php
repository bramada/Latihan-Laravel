@extends('layout.main')

@section('title', 'Daftar Mahasiswa')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-6">
            <h1 class="mt-3">Detail Student</h1>
            <div class="card shadow rounded-0 border-0 mt-3">
                <div class="card-body">
                    <h5 class="card-title">{{ $student->nama }}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{ $student->nrp }}</h6>
                    <p class="card-text">{{ $student->email }}</p>
                    <p class="card-text">{{ $student->jurusan }}</p>
                    <hr>
                    <a href="{{ $student->id }}/edit" class="btn btn-primary">Edit</a>
                    <form action="{{ $student->id }}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                    <a href="{{ url('/students') }}" class="card-link">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
