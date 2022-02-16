<div class="col-lg-7 mb-lg-0 mb-4 mt-4">
    <div class="card ">
        <div class="card-header pb-0 p-3">
            <div class="d-flex justify-content-between">
                <h6 class="mb-2">Tag</h6>
                <button type="button" class="mb-0 btn btn-success" data-bs-toggle="modal" data-bs-target="#modal-tag">
                    tambah Tag
                </button>
            </div>
        </div>
        <div class="d-flex align-items-center justify-content-center   mb-3 mt-3">
            <div class="col-sm-12 px-3">
                @foreach ($tag as $hasil)
                    <span class="badge m-1 bg-success">{{ $hasil->name }}

                        <button class="border-0 bg-transparent  text-white" type="button" data-bs-toggle="modal"
                            data-bs-target="#{{ $hasil->slug }}"><i class="bi bi-x-lg"></i></button>




                        <div class="modal fade" id="{{ $hasil->slug }}" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content  card">
                                    <form action="/destroy-tag/{{ $hasil->id }}" class="d-inline"
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
                                                    <h5>Yakin ingin menghapus Tag<strong>
                                                            {{ $hasil->name }}</strong></h5>


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






                    </span>
                @endforeach



            </div>
        </div>
    </div>
    <div class="modal fade" id="modal-tag" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content  card">
                <form action="/create-tag" method="POST">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Tag</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-text" id="basic-addon1"><i class="bi bi-bookmark"></i></span>
                                <input type="text" class="form-control @error('name') is-invalid @enderror"
                                    placeholder="Nama Category" name="name" id="name" aria-label="Username"
                                    aria-describedby="basic-addon1" required autofocus>

                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
