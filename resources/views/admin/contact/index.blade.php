@extends('layouts.backend.main')

@section('title', 'Pendidikan')
@section('kontent')

    <div class="container-fluid" id="container-wrapper">
        <div class="col-12">            
            <div class="row my-3">
                <div class="col-lg-6">
                    <h2>Data Contact</h2>
                </div>
            </div>

            @if ($message = Session::get('success'))
                <div class="alert alert-success text-center">
                    <h6>{{ $message }}</h6>
                </div>
            @endif

            <div class="mb-4 col-lx-12">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <a class="btn btn-success" href="{{ route('admin.contact.create') }}">
                    <i class="fas fa-plus"></i> Tambah Contact
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
                                    <th>Nama lengkap</th>
                                    <th>Email</th>
                                    <th>Massage</th>
                                    <th width="230px">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($contacts)
                                    @foreach ($contacts as $contact)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $contact->nama_lengkap }}</td>
                                            <td>{{ $contact->email }}</td>
                                            <td>{{ $contact->message }}</td>
                                            <td>
                                                <form action="{{ route('admin.contact.destroy', $contact->id) }}" method="POST">
                                               
                                                    <a class="btn btn-primary"
                                                        href="{{ route('admin.contact.edit', $contact->id) }}">Edit</a>
                                                
                                                    @csrf
                                                    @method('DELETE')
    
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <p>
                                        No contact data available
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
