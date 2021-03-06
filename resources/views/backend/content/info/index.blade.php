@extends('../../backend')

@section('main')

    <div class="card mb-3 p-3 border-bottom shadow d-flex">
        <h3>Daftar Informasi</h3>
        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5 shadow-0">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-secondary"
                    href="/dashboard">Dashboard</a></li>
            <li class="breadcrumb-item text-sm text-secondary active" aria-current="page">{{ $title }}</li>
        </ol>
    </div>
    @if (session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show py-4" role="alert">
        <strong>Succes</strong> {{ session ('success') }}.
        <button type="button" class="btn-close text-white" data-bs-dismiss="alert" aria-label="Close"><i class="bi bi-x-lg"></i></button>
    </div>
    @endif
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">

                <div class="m-4">

                    <a href="{{ route('info.create') }}" class="btn btn-primary ">Tambah Informasi</a>
                </div>

                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table table-hover align-middle align-items-center justify-content-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        No</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Gambar</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Judul</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Dibuat</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Kategory</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i = 1;
                                @endphp

                                @foreach ($info as $item)
                                    <tr>
                                        <td>
                                            <p class="text-sm font-weight-bold mb-0 text-center">{{ $i++ }}</p>
                                        </td>
                                        <td>
                                            <img src="{{ asset($item->gambar) }}"
                                                class="rounded shadow-lg" width="100px" alt="">
                                        </td>
                                        <td>
                                            <div class="d-flex px-2 ">
                                                <p class="text-sm font-weight-bold mb-0">{{ $item->title }}</p>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-xs  mb-0">{{ $item->created_at->diffForHumans() }}</p>
                                        </td>
                                        <td>
                                            <span class="badge badge-sm bg-gradient-secondary">{{ $item->category->name }}</span>
                                        </td>
                                        <td>
                                            <div class="d-flex gap-2">
                                                {{-- view --}}
                                                <a href="/dashboard/info/{{ $item->slug }}" class="badge btn-primary"><i class="bi bi-eye-fill"></i></a>
                                                {{-- edit --}}
                                                <a href="/dashboard/info/{{ $item->slug }}/edit" class="badge btn-success"><i
                                                        class="bi bi-pencil-square"></i></a>
                                                {{-- deleted --}}



                                                
                                                <button type="button" data-bs-toggle="modal"
                                                data-bs-target="#{{ $item->slug }}" class="badge btn-danger border-0" >
                                                    <i class="bi bi-x-circle"></i>
                                                </button>
                                                
                                            </div>
                                        </td>


                                    </tr>

                                    {{-- MODAL --}}
                                    <div class="modal fade" id="{{ $item->slug }}" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content  card">
                                                <form action="/dashboard/info/{{ $item->id }}" class="d-inline"
                                                    method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Hapus Tag</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <h5>Yakin ingin menghapus Informasi<strong>
                                                                        {{ $item->title }}</strong></h5>
            
            
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><i
                                                                class="bi bi-x-lg"></i> Cancel</button>
                                                        <button type="submit" class="btn btn-success"><i class="bi bi-check-lg"></i>
                                                            Yes</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach


                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
            <div class="mx-auto">
                {{ $info->links('pagination::bootstrap-4') }}
            </div>
        </div>
    </div>

    </div>
@endsection
