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
        </div><!-- /.container-fluid -->
    </section>

    <form method="POST" action="{{ route('cast.update', $data->id) }}" enctype="multipart/form-data">
        {{ csrf_field() }}
        {{ method_field('put') }}
        <section class="content">

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Edit Cast no {{$data->id}}</h3>
                </div>
                <div class="card-body">

                    <div class="form-group{{ $errors->has('nama') ? ' has-error' : '' }}">
                        <label for="nama" class="col-md-4 control-label">Nama</label>
                        <div class="col-md-6">
                            <input id="nama" type="text" class="form-control" name="nama"
                                   value="{{ $data->nama }}" required>
                            @if ($errors->has('nama'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('nama') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('umur') ? ' has-error' : '' }}">
                        <label for="umur" class="col-md-4 control-label">Umur</label>
                        <div class="col-md-6">
                            <input id="umur" type="number" class="form-control" name="umur"
                                   value="{{ $data->umur }}" required>
                            @if ($errors->has('umur'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('umur') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('bio') ? ' has-error' : '' }}">
                        <label for="bio" class="col-md-4 control-label">Bio</label>
                        <div class="col-md-6">
                            <input id="bio" type="text" class="form-control" name="bio"
                                   value="{{ $data->bio }}" required>
                            @if ($errors->has('bio'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('bio') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary" id="submit">
                        Update
                    </button>
                    <a href="{{route('cast.index')}}" class="btn btn-light pull-right">Back</a>

                </div>
            </div>
        </section>
        <!-- /.content -->
    </form>
@endsection
