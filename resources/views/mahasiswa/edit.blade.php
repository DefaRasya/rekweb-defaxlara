@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Mahasiswa</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="" title="Kembali"> <i class="fas fa-backward "></i> </a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Error!</strong>
            <ul>
                @foreach ($errors->all() as $error)
                    <li></li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>NIM:</strong>
                    <input type="text" name="nim" value="" class="form-control" placeholder="NIM">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama Mahasiswa</strong>
                    <input type="text" name="nama_mahasiswa" value="" class="form-control" placeholder="Nama Mahasiswa">
                </div>
            </div>
        </div>

    </form>
@endsection
