@extends('layouts.backend.main')

@section('title', 'Pendidikan')
@section('kontent')

    <div class="container-fluid" id="container-wrapper">
        <div class="col-12">            
            <div class="row my-3">
                <div class="col-lg-6">
                    <h2>Data Pendidikan</h2>
                </div>
            </div>

            @if ($message = Session::get('success'))
                <div class="alert alert-success text-center">
                    <h6>{{ $message }}</h6>
                </div>
            @endif

            <div class="mb-4 col-lx-12">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <a class="btn btn-success" href="{{ route('admin.pendidikan.create') }}">
                    <i class="fas fa-plus"></i> Tambah Pendidikan
                </a>
            </div>

            <div class="col-12">
                <div class="card mb-4">
                  <div class="card-header pb-0">
                  </div>
                  <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center table-flush w-100" id="dataTable">
                            <thead class="thead-light">
                                <tr>
                                    <th width="30px">No</th>
                                    <th>Nama Instansi</th>
                                    <th>Tahun Masuk</th>
                                    <th>Tahun Selesai</th>
                                    <th>Keterangan</th>
                                    <th width="230px">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($pendidikans)
                                    @foreach ($pendidikans as $pendidikan)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $pendidikan->nama_instansi }}</td>
                                            <td>{{ $pendidikan->tahun_masuk }}</td>
                                            <td>{{ $pendidikan->tahun_selesai }}</td>
                                            <td>{{ $pendidikan->keterangan }}</td>
                                            <td>
                                                <form action="{{ route('admin.pendidikan.destroy', $pendidikan->id) }}" method="POST">
                                               
                                                    <a class="btn btn-primary"
                                                        href="{{ route('admin.pendidikan.edit', $pendidikan->id) }}">Edit</a>
                                                
                                                    @csrf
                                                    @method('DELETE')
    
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <p>
                                        No pendidikan data available
                                    </p>
                                @endif
                            </tbody>
                        </table>

                    </div>
                  </div>
                </div>
              </div>

                <div class="table-responsive p-3">
    
                </div>
            </div>
        </div>
    </div>
@endsection
