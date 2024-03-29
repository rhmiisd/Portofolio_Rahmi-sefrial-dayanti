@extends('layouts.backend.main')
@section('kontent')
    <div class="container-fluid" id="container-wrapper">
        <form action="{{ route('admin.profile.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="row my-3">
                <div class="col-lg-6">
                    <h2>Create Data Diri</h2>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-8 col-lg-9">
                    <input type="text" name="nama_lengkap" class="form-control" placeholder="nama diri sendiri">
                </div>
            </div>
    
                <div class="row mb-3">
                    <div class="col-md-8 col-lg-9">
                        <input type="date" name="birthday" class="form-control" placeholder="tanggal lahir">
                    </div>
                </div>
    
                <div class="row mb-3">
                    <div class="ol-md-8 col-lg-9">
                        <input type="text" name="phone" class="form-control" placeholder="Nomor Telepon">
                    </div>
                </div>
                
                <div class="row mb-3">
                    <div class="col-md-8 col-lg-9">
                        <input type="text" name="email" class="form-control" placeholder="Email">
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-8 col-lg-9">
                        <input type="file" name="foto" class="form-control" placeholder="Foto">
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-8 col-lg-9">
                        <input type="text" name="keterangan" class="form-control" placeholder="Keterangan">
                    </div>
                </div>
     
            <div class="row">
                <div class="col-md-8 col-lg-9">
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </div>
        </form>
    </div> 
@endsection