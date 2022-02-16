<!-- Modal -->
<div class="modal fade" id="{{ $user->slug }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content card">
            <div class="modal-header border-0 text-secondary">
                <h5 class="modal-title pt-5" id="exampleModalLabel"></h5>
                <button type="button" class="text-secondary border-0 bg-transparent fs-4" data-bs-dismiss="modal"><i
                        class="bi bi-x-circle"></i></button>
            </div>
            <div class="modal-body">
                <div class="col-md-12">
                    <div class=" card-profile">

                        <div class="row justify-content-center">
                            <div class="col-4 col-lg-4 order-lg-2">
                                <div class="mt-n4 mt-lg-n6 mb-4 mb-lg-0">
                                    <a href="#" class="d-flex align-items-center justify-content-center">
                                        <i class="bi bi-check-circle-fill text-success position-absolute fs-2"
                                            style="top : 10%; left: 57%"></i>
                                        <img src="{{ $user->avatar }}"
                                            class="rounded-circle   img-thumbnail  border-2 border-white shadow-lg" style="width: 200px">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body pt-0">

                            <div class="text-center mt-4">
                                <span class="badge badge-sm bg-gradient-success">Anggota</span>
                                {{-- <span class="badge badge-sm bg-gradient-warning mb-3">Komisi</span> --}}
                                <h5>
                                    {{ $user->username }}
                                </h5>
                                <div class="h6 font-weight-300">
                                    <i class="ni location_pin mr-2"></i>{{ $user->name }}
                                </div>

                                <div class="d-flex justify-content-center gap-3">
                                    <p><i class="bi bi-telephone"></i> : <span>{{ $user->noTelp }}</span></p>
                                    <p><i class="bi bi-envelope"></i> : <span>{{ $user->email }}</span></p>
                                </div>
                                <p><i class="bi bi-list-ol"></i> Kolom : <span>14</span></p>

                                <div class="d-flex justify-content-center gap-3">
                                    <div class="container">
                                        <p><i class="bi bi-geo-alt-fill"></i> Alamat :
                                            <span>{{ $user->alamat }}</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>
