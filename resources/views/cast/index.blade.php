@extends('layouts.app')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Cast</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Cast</li>
                    </ol>
                </div>
            </div>
            <a href="{{ route('cast.create') }}" class="btn btn-primary">
                <i class="fas fa-plus"></i>
                Add Cast
            </a>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">List of Cast</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Umur</th>
                        <th>Bio</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $content)
                        <tr>
                            <td><a href="{{route('cast.show', $content->id)}}">{{ $content->nama }}</a></td>
                            <td>{{ $content->umur }}</td>
                            <td>{{ $content->bio }}</td>
                            <td>
                                <a href="{{ route('cast.edit', $content->id) }}" class="btn btn-warning">Edit</a>
                                <form action="{{ route('cast.destroy', $content->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger"
                                            onclick="return confirm('Anda yakin ingin menghapus data ini?')">Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>Nama</th>
                        <th>Umur</th>
                        <th>Bio</th>
                        <th>Action</th>
                    </tr>
                    </tfoot>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
    </section>
    <!-- /.content -->



@endsection
