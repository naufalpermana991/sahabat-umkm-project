@extends('layouts.admin')

@section('content')
      <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Tambah Event</h1>
        </div>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="card shadow">
            <div class="div card-body">
                <form action="{{ route('event.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="title">Judul</label>
                        <input type="text" name="title" placeholder="title" 
                        class="form-control" value="{{ old('title') }}">
                    </div>
                    <div class="form-group">
                        <label for="status">Status Event</label>
                        <input type="text" name="status" placeholder="status" 
                        class="form-control" value="{{ old('status') }}">
                    </div>
                    <div class="form-group">
                        <label for="about">About</label>
                        <textarea name="about" class="d-block w-100 form-control" cols="30" rows="10">
                        {{ old('about') }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="time">Jam Pelaksanaan</label>
                        <input type="date" name="time" placeholder="time" 
                        class="form-control" value="{{ old('time') }}">
                    </div>
                    <div class="form-group">
                        <label for="venue">Tempat</label>
                        <input type="text" name="venue" placeholder="venue" 
                        class="form-control" value="{{ old('venue') }}">
                    </div>
                    <div class="form-group">
                        <label for="price">Harga</label>
                        <input type="number" name="price" placeholder="price" 
                        class="form-control" value="{{ old('price') }}">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Simpan</button>
                </form>
            </div>
        </div>
    </div>
        <!-- /.container-fluid -->
@endsection