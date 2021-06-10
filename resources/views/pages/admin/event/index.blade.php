@extends('layouts.admin')

@section('content')
      <!-- Begin Page Content -->
        <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Event</h1>
            <a href="{{ route('event.create') }}" class="btn btn-sm btn-primary shadow-sn">
                <i class="fas fa-plus fa-sm"></i> Tambah Event
            </a>
        </div>

        <div class="row">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Status</th>
                                <th>About</th>
                                <th>Time</th>
                                <th>Venue</th>
                                <th>Price</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                            <tbody>
                                @forelse ($items as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->title }}</td>
                                    <td>{{ $item->status }}</td>
                                    <td>{{ $item->about }}</td>
                                    <td>{{ $item->time }}</td>
                                    <td>{{ $item->venue }}</td>
                                    <td>{{ $item->price }}</td>
                                    <td>
                                        <a href="{{ route('event.edit', $item->id) }}" class="btn btn-info">
                                            <i class="fa fa-pencil-alt"></i>
                                        </a>
                                        <form action="{{ route('event.destroy', $item->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-danger">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="8" class="text-center">
                                    Data Kosong
                                    </td>
                                </tr>
                                @endforelse
                            </tbody>
                    </table>
                </div>
            </div>
        </div>


    </div>
        <!-- /.container-fluid -->
@endsection