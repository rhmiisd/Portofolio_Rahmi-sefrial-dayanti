@extends('layouts.backend.main')
@section('kontent')
    <div class="container-fluid" id="container-wrapper">
        <form action="{{ route('admin.pendidikan.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="row my-3">
                <div class="col-lg-6">
                    <h2>Create Data Contact</h2>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-8 col-lg-9">
                    <input type="text" name="nama_lengkap" class="form-control" placeholder="nama lengkap">
                </div>
            </div>
    
                <div class="row mb-3">
                    <div class="col-md-8 col-lg-9">
                        <input type="text" name="email" class="form-control" placeholder="email">
                    </div>
                </div>
    
                <div class="row mb-3">
                    <div class="ol-md-8 col-lg-9">
                        <input type="text" name="message" class="form-control" placeholder="Message">
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