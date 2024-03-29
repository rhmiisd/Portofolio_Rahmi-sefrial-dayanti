@extends('layouts.backend.main')

@section('title', 'Profile')
@section('kontent')

    <div class="container-fluid" id="container-wrapper">
        <div class="col-12">            
            <div class="row my-3">
                <div class="col-lg-6">
                    <h2>Data Profile</h2>
                </div>
            </div>

            @if ($message = Session::get('success'))
                <div class="alert alert-success text-center">
                    <h6>{{ $message }}</h6>
                </div>
            @endif

            <div class="mb-4 col-lx-12">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <a class="btn btn-success" href="{{ route('admin.profile.create') }}">
                    <i class="fas fa-plus"></i> Tambah Profile
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
                                    <th>Nama Lengkap</th>
                                    <th>Tanggal lahir</th>
                                    <th>Email</th>
                                    <th>Foto</th>
                                    <th>Keterangan</th>
                                    <th width="230px">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($profiles)
                                    @foreach ($profiles as $profile)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $profile->nama_lengkap }}</td>
                                            <td>{{ $profile->birthday }}</td>
                                            <td>{{ $profile->email }}</td>
                                            <td> <img src="{{ Storage::url('/'. $profile->foto) }}" alt="" width="100px"></td>
                                            <td>{{ $profile->keterangan }}</td>
                                            <td>
                                                <form action="{{ route('admin.profile.destroy', $profile->id) }}" method="POST">
                                               
                                                    <a class="btn btn-primary"
                                                        href="{{ route('admin.profile.edit', $profile->id) }}">Edit</a>
                                                
                                                    @csrf
                                                    @method('DELETE')
    
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <p>
                                        No profile data available
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
