@extends('../../backend')

@section('main')
    <div class="card mb-3 p-3 border-bottom shadow d-flex">
        <h3>Buat Informasi Pelayanan</h3>
        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5 shadow-0">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-secondary" href="/dashboard">Dashboard</a></li>
            <li class="breadcrumb-item text-sm text-secondary " aria-current="page"><a class="opacity-5 text-secondary"
                    href="/dashboard/info">{{ $title }}</a></li>
            <li class="breadcrumb-item text-sm text-secondary active" aria-current="page">Create</li>
        </ol>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card mb-4 w" style="min-height: 100vh">
                <form class="card-body" method="post" action="/dashboard/info/create " enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="title" class="form-control-label">Judul</label>
                                <input class="form-control @error('title') is-invalid @enderror " type="text"
                                    value="{{ old('title') }}" id="title" name="title" autofocus required>
                                @error('title')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror


                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="title" class="form-control-label">Ketegory</label>
                                <select class="form-control " id="categories_id" name="categories_id">
                                    @foreach ($category as $hasil)
                                        @if (old('category_id') == $hasil->id)
                                            <option value="{{ $hasil->id }}" selected>{{ $hasil->name }}</option>
                                        @else
                                            <option value="{{ $hasil->id }}">{{ $hasil->name }}</option>
                                        @endif
                                    @endforeach

                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="title" class="form-control-label">Ketegory</label>
                                <div class="form-group">
                                    <select class="js-example-basic-multiple form-control" name="states[]" multiple="multiple">
                                        <option value="AL">Alabama</option>
                                        ...
                                        <option value="WY">Wyoming</option>
                                    </select>
        
                                    <script>
                                        $(document).ready(function() {
                                            $('.js-example-basic-multiple').select2();
                                        });
                                    </script>
        
                                </div>
                            </div>
                        </div>
                        {{-- tagg --}}
                        



                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="gambar" class="form-control-label">Gambar</label>
                                <input class="form-control  @error('gambar') is-invalid @enderror" type="file"
                                    value="{{ old('gambar') }} id=" gambar" name="gambar">
                                @error('title')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="body" class="form-control-label">Content</label>
                                @error('content')
                                    <div class="alert alert-danger alert-dismissible fade show py-4 text-white" role="alert">
                                        <strong>Error</strong> {{ $message }}.
                                        <button type="button" class="btn-close text-white" data-bs-dismiss="alert"
                                            aria-label="Close"><i class="bi bi-x-lg"></i></button>
                                    </div>
                                @enderror
                                <textarea class="form-control" type="text" id="content"
                                    name="content">{{ old('content') }}</textarea>
                                <script>
                                    ClassicEditor
                                        .create(document.querySelector('#content'))
                                        .catch(error => {
                                            console.error(error);
                                        });
                                </script>
                            </div>

                        </div>


                    </div>

                    <div class="m-4">

                        <button class="btn btn-primary " type="submit">Tambah Informasi</button>
                    </div>
                </form>

            </div>

        </div>
    </div>

    </div>
@endsection
