<div class="row mt-4">
    <div class="col-lg-5">
        <div class="card">
            <div class="card-header pb-0 p-3 d-flex justify-content-between   align-items-center">
                <h6 class="mb-0">Categories</h6>

                <button type="button" class="mb-0 btn btn-primary" data-bs-toggle="modal"
                    data-bs-target="#exampleModal">
                    tambah Category
                </button>
            </div>
            <!-- Button trigger modal -->


            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content  card">
                        <form action="/create-category" method="POST">
                            @csrf
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Tambah Category</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon1"><i
                                                class="bi bi-bookmark"></i></span>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                                            placeholder="Nama Category" name="name" id="name" aria-label="Username"
                                            aria-describedby="basic-addon1" required autofocus>

                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary"
                                    data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>




            <div class="card-body p-3">
                <ul class="list-group">

                    @foreach ($category as $item)
                        <li class="list-group-item  d-flex justify-content-between ps-0 mb-2 border-radius-lg ">
                            <div class="d-flex align-items-center ">

                                <div class="d-flex flex-column ">
                                    <h6 class="mb-1 text-dark text-sm ps-3">{{ $item->name }}</h6>
                                </div>
                            </div>
                            <div class="d-flex">

                                {{-- tombol --}}
                                <button type="button" data-bs-toggle="modal" data-bs-target="#{{ $item->slug }}"
                                    class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto"><i
                                        class="bi bi-trash ni text-danger" aria-hidden="true"></i></button>



                                <form action="/destroy-category/{{ $item->id }}" method="post">
                                    @csrf
                                    <div class="modal fade" id="{{ $item->slug }}" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content  card">
                                                <form action="/create-category" method="POST">
                                                    @csrf
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Hapus
                                                            Category</h5>
                                                        <button type="button" class="btn-close"
                                                            data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <h5>Yakin ingin menghapus category<strong>
                                                                        {{ $item->name }}</strong></h5>


                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger"
                                                            data-bs-dismiss="modal"><i class="bi bi-x-lg"></i> Cancel</button>
                                                        <button type="submit" class="btn btn-success"><i class="bi bi-check-lg"></i> Yes</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>


                                </form>
                            </div>
                        </li>
                    @endforeach

                </ul>
            </div>
        </div>
    </div>