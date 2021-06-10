@extends('layouts.admin')

@section('content')
      <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit Gallery</h1>
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
                <form action="{{ route('gallery.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="event_id">Event</label>
                        <select name="event_id" required class="form-control">
                            <option value="{{ $item->event_id }}">Jangan Diubah</option>
                            @foreach ($events as $event)
                                <option value="{{ $event->id }}">
                                    {{ $event->title }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="image">Gambar</label>
                        <input type="file" name="image" placeholder="image" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Simpan Perubahan</button>
                </form>
            </div>
        </div>
    </div>
        <!-- /.container-fluid -->
@endsection