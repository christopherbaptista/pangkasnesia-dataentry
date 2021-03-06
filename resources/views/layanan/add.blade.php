@extends('main')

@section('title', 'Layanan')

@section('breadcrumbs')
    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1> Layanan</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li><a href="#">Layanan</a></li>
                        <li class="active">Add</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="pull-left">
                <strong>Tambah Layanan</strong>
            </div>
            <div class="pull-right">
                <a href="{{ url('layanan') }}" class="btn btn-secondary btn-sm">
                    <i class="fa fa-undo"></i> Back
                </a>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-4 offset-md-4">
                    <form action="{{ url('layanan') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label>Nama Layanan</label>
                            <input type="text" name="name" class="form-control" autofocus required>
                        </div>
                        <div class="form-group">
                            <label>Keterangan</label>
                            <textarea name="desc" class="form-control" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-success">Save</button>
                    </form>
                </div>
            </div>
        </div>

    
    </div>
@endsection