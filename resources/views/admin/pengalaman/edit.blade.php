@extends('layouts.backend.main')
@section('title', 'Pendidikan')
@section('kontent')

    <div class="container-fluid" id="container-wrapper">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left">
                        <h2>Edit Data Pendidikan</h2>
                    </div>
                </div>
            </div>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> Something went wrong.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="card mb-4">
                <div class="col-lg-12 mt-4">
                    <form action="{{ route('admin.pengalaman.update', $pengalamans->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')

                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label class="fw-bold text-dark">Nama Organisasi</label>
                                    <input type="text" name="pengalaman" value="{{ $pengalamans->pengalaman }}" class="form-control" placeholder="Nama Organisasi">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label class="fw-bold text-dark">Tahun Jabat</label>
                                    <input type="text" name="tahun" value="{{ $pengalamans->tahun}}" class="form-control" placeholder="Tahun jabat">
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label class="fw-bold text-dark">Keterangan</label>
                                    <input type="text" name="keterangan" value="{{ $pengalamans->keterangan }}" class="form-control" placeholder="Keterangan">
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12 text-right mb-3">
                                <a class="btn btn-dark" href="{{ route('admin.pendidikan.index') }}"> Back</a>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
