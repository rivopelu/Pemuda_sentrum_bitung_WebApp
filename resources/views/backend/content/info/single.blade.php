@extends('../../backend')

@section('main')
    <div class="card mb-3 p-3 border-bottom shadow d-flex">
        <h3>Daftar Informasi</h3>
        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5 shadow-0">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-secondary" href="/dashboard">Dashboard</a></li>
            <li class="breadcrumb-item text-sm text-secondary active" aria-current="page"><a class="text-secondary" href="/dashboard/info">{{ $title }}</a>  / <a href="/dashboard/info/{{ $info->slug }}" class="text-primary">{{ $info->title }}</a>  </li>
        </ol>
    </div>
    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show py-4" role="alert">
            <strong>Succes</strong> {{ session('success') }}.
            <button type="button" class="btn-close text-white" data-bs-dismiss="alert" aria-label="Close"><i
                    class="bi bi-x-lg"></i></button>
        </div>
    @endif
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-5">
                        <div class="d-flex justify-content-center flex-column border-bottom pb-3">

                            <h1 class="text-uppercase">{{ $info->title }}</h1>
                            <img src="{{ asset($info->gambar) }}" alt="" class="img-thumbnail shadow-lg" width="800px">

                            <div class="d-flex gap-2 pt-3">
                                {{-- kemmbali lagi dia --}}
                                <a href="/dashboard/info" class="btn btn-primary"><i class="bi bi-arrow-left-circle"></i> Kembali</a>
                                {{-- edit --}}
                                <a href="#" class="btn btn-success"><i
                                        class="bi bi-pencil-square"></i> Edit</a>
                                {{-- deleted --}}



                                
                                <button type="button" data-bs-toggle="modal"
                                data-bs-target="#{{ $info->slug }}" class="btn btn-danger border-0" >
                                    <i class="bi bi-x-circle"> Hapus</i>
                                </button>
                                

                                 {{-- MODAL --}}
                                 <div class="modal fade" id="{{ $info->slug }}" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content  card">
                                            <form action="/destroy-info/{{ $info->id }}" class="d-inline"
                                                method="post">
                                                @csrf
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Hapus Tag</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <h5>Yakin ingin menghapus Informasi<strong>
                                                                    {{ $info->title }}</strong></h5>
        
        
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
                            </div>
                        </div>

                        <div class="">
                            {!! $info->content !!}
                        </div>

                    </div>
                </div>

            </div>

        </div>
    </div>

    </div>
@endsection
