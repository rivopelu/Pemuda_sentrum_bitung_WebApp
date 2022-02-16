@extends('../../backend')

@section('main')

    <div class="card mb-3 p-3 border-bottom shadow d-flex">
        <h3>Edit Informasi Pelayanan</h3>
        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5 shadow-0">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-secondary" href="/dashboard">Dashboard</a></li>
            <li class="breadcrumb-item text-sm text-secondary " aria-current="page"><a class="opacity-5 text-secondary"
                    href="/dashboard/info">{{ $title }}</a></li>
            <li class="breadcrumb-item text-sm text-secondary active" aria-current="page">edit</li>
        </ol>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card mb-4 w" style="min-height: 100vh">
                <form class="card-body" method="post" action="/dashboard/info/{{ $info->slug }}" enctype="multipart/form-data">
                    @method('put')
                    @csrf

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="title" class="form-control-label">Judul</label>
                                <input class="form-control" type="text" value="{{ old('title'), $info->title }}" id="title" name="title">
                            </div>
                        </div>
                        {{-- <div class="col-md-6">
                            <div class="form-group">
                                <label for="title" class="form-control-label">Ketegory</label>
                                <select class="form-control"   id="" name="">
                                    <option value="">1</option>
                                    <option value="">2</option>
                                    <option value="">3</option>
                                    <option value="">4</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="form-control-label">Tag</label>
                                <input class="form-control" type="text" value="" id="" name="">
                            </div>
                        </div> --}}
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="gambar" class="form-control-label">Gambar</label>
                                <input class="form-control" type="file" value="" id="gambar" name="gambar">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="body" class="form-control-label">Content</label>
                                <textarea class="form-control" type="text" value="" id="body" name="body"></textarea>
                            </div>
                        </div>
                        

                    </div>

                    <div class="m-4">
    
                        <button class="btn btn-primary ">Tambah Informasi</button>
                    </div>
                </form>

            </div>

        </div>
    </div>

    </div>
@endsection
